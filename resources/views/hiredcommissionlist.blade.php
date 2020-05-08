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
                        <th>Commission Name</th>
                        <th>Price</th>
                        <th>Image (From Client)</th>
                        <th>Result from Artist</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                    <tr>
                        <td>{{ $row->commission_name }}</td>
                        <td>{{ $row->payment_amount }}</td>
                        <td><a href="{{ $row->image_from_client }}" target="_blank">{{ $row->image_from_client }}</a></td>
                        <td><a href="{{ $row->image_from_artist }}" target="_blank">{{ $row->image_from_artist }}</a></td>
                        <td>{{ $row->transaction_status }}</td>
                        <td>
                            <div class="d-flex">
                                <input type="button" value="Accept" class="btn btn-info mr-2">
                                <input type="button" value="Revision" class="btn btn-primary mr-2">
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('layout.partial.footer')
</body>
</html>