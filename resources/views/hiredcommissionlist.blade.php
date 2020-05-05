<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.partial.landingpageheader')
    @section('title', 'Hired Commission List')
</head>
<body>
    @include('layout.partial.usernavbar')
    
    <div class="container mt-5 mb-5" style="min-height: 600px">
        <h1 style="mb-3">Hired Commission History</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Artist</th>
                        <th>Commission Name</th>
                        <th>Price</th>
                        <th>Image (From Client)</th>
                        <th>Result from Artist</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->artist_name }}</td>
                        <td>{{ $row->commission_name }}</td>
                        <td>{{ $row->payment_amount }}</td>
                        <td>{{ $row->image_from_client }}</td>
                        <td>{{ $row->image_from_artist }}</td>
                        <td>{{ $row->transaction_status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('layout.partial.footer')
</body>
</html>