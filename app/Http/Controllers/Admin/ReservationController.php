<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Constant;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with('table')->get(); // Eager loading table untuk mengurangi query N+1
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables = Table::where('status', Constant::TABLE_STATUS['Available'])->get();
        return view('admin.reservations.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrFail($request->table_id);

        // Validasi jumlah tamu
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table based on guests.');
        }

        // Validasi tanggal reservasi
        $request_date = Carbon::parse($request->res_date);
        foreach ($table->reservations as $res) {
            if ($res->res_date->isSameDay($request_date)) {
                return back()->with('warning', 'This table is reserved for this date.');
            }
        }

        // Buat reservasi
        Reservation::create($request->validated());

        return to_route('admin.reservations.index')->with('success', 'Reservation created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $tables = Table::where('status', Constant::TABLE_STATUS['Available'])->get();
        return view('admin.reservations.edit', compact('reservation', 'tables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrFail($request->table_id);

        // Validasi jumlah tamu
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Please choose the table based on guests.');
        }

        // Validasi tanggal reservasi
        $request_date = Carbon::parse($request->res_date);
        $reservations = $table->reservations()->where('id', '!=', $reservation->id)->get();
        foreach ($reservations as $res) {
            if ($res->res_date->isSameDay($request_date)) {
                return back()->with('warning', 'This table is reserved for this date.');
            }
        }

        // Update reservasi
        $reservation->update($request->validated());

        return to_route('admin.reservations.index')->with('success', 'Reservation updated successfully!');
    }

    /**
     * Export reservations to PDF.
     */
    public function generatePdf()
    {
        $reservations = Reservation::with('table')->get();
        $pdf = Pdf::loadView('admin.reservations.pdf', compact('reservations'));
        return $pdf->download('reservations.pdf');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservations.index')->with('danger', 'Reservation deleted successfully.');
    }
}
