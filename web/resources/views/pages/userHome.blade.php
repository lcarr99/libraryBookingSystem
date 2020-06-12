@extends("templates.adminTemplate")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                You have {{$bookingsCount}} bookings.
            </div>
            <div class="col-md-6">
                <div class="overdueBookings justify-content-center bg-danger">
                    <table>
                        <tr><td class="justify-content-center">Overdue Bookings</td></tr>
                        <tr><td>You have {{$overdueBookings}} bookings overdue.</td></tr>
                        <tr><td>View</td></tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
