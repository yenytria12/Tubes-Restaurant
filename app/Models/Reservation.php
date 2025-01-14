<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reservation extends Model
{
    use HasFactory;

    // Daftar kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'tel_number',
        'res_date',
        'table_id',
        'guest_number',
    ];

    // Pastikan res_date otomatis di-cast menjadi instance Carbon
    protected $casts = [
        'res_date' => 'datetime', // Laravel akan otomatis menggunakan Carbon
    ];

    // Relasi ke tabel Table
    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    // Contoh accessor untuk format res_date jika diperlukan
    public function getFormattedResDateAttribute()
    {
        return $this->res_date ? $this->res_date->format('d M Y H:i') : null;
    }
}