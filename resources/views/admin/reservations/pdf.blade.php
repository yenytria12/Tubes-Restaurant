<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>Reservation List</h2>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Reservation Date</th>
                <th>Table</th>
                <th>Guest No.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                <td>{{ $reservation->email }}</td>
                <td>{{ $reservation->tel_number }}</td>
                <td>{{ $reservation->res_date }}</td>
                <td>{{ $reservation->table->name }}</td>
                <td>{{ $reservation->guest_number }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>