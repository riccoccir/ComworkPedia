<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layout.partial.landingpageheader')
    @section('title', 'Artist - Dashboard')
</head>

<body>
    @include('layout.partial.artistnavbar')


    <div class="container mt-5" style="min-height: 600px">
        <h1>Halo, {{ (Auth::guard('artist')->user())['artist_name'] }}</h1>

        <div name="createnewcommission" class='mt-5'>
            <a class="nav-link" href="#" data-toggle="modal" data-target="#NewCommissionModal"><input type="button" class="btn btn-info" value="Create New Commission"></a>
        </div>

        <div name="commissionlist" class='mt-5'>
            <h3>Your Commission List</h3>
            @if($commission->isEmpty())
            <div class="align-text-center">
                <h3>There is No Data</h3>
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Commission Name</th>
                            <th>Slot</th>
                            <th>Duration</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($commission as $row)
                        <tr>
                            <td>{{ $row->commission_name }}</td>
                            <td>{{ $row->slot_available }}</td>
                            <td>{{ $row->commission_duration }}</td>
                            <td>{{ $row->commission_price }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/artist/dashboard/edit/{{ $row->commission_id }}"><input type="button" value="Edit" class="btn btn-info mr-2"></a>
                                    <a href="/artist/dashboard/delete/{{ $row->commission_id }}"><input type="button" value="Delete" class="btn btn-danger mr-2"></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(\Session::has('cantdelete'))
                <h3>{{!! \Sessin::get('cantdelete') !!}}</h3>
                @endif
            </div>
            @endif
        </div>

        <div name="pendingofferlist" class='mt-5'>
            <h3>Pending Offer List</h3>
            @if($pending->isEmpty())
            <div class="align-text-center">
                <h3>There is No Data</h3>
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Commission Name</th>
                            <th>Job Details</th>
                            <th>Job Price</th>
                            <th>Paymet Receipt</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pending as $row)
                        <tr>
                            <td>{{ $row->commission_name }}</td>
                            <td>{{ $row->slot_available }}</td>
                            <td>{{ $row->payment_amount }}</td>
                            <td>ntar ada gambar</td>
                            <td>Waiting</td>
                            <td>
                                <div class="d-flex">
                                    <a href="/artist/dashboard/{{ $row->hire_id }}/status/onprogress"><input type="button" value="Accept" class="btn btn-success mr-2"></a>
                                    <a href="/artist/dashboard/{{ $row->hire_id }}/status/rejected""><input type=" button" value="Reject" class="btn btn-danger mr-2"></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>

        <div name="onprogresslist" class='mt-5'>
            <h3>On Progress List</h3>
            @if($onprogress->isEmpty())
            <div class="align-text-center">
                <h3>There is No Data</h3>
            </div>
            @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Commission ID</th>
                            <th>Client Name</th>
                            <th>Status</th>
                            <th>Image from Client</th>
                            <th>Image from Artist</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($onprogress as $row)
                        <tr>
                            <td>{{ $row->commission_id }}</td>
                            <td>{{ $row->client_name }}</td>
                            <td>{{ $row->transaction_status }}</td>
                            <td><a href="{{ $row->image_from_client }}">image from client</a></td>
                            <form id="newimage" action="artist/submit/image/{{ $row->hire_id }}" method="post">
                                <td><input type="text" name="resultimage" id="resultimage" value="{{ $row->image_from_artist }}"></td>
                                <td>
                                    <div class="d-flex">
                                        <input type="submit" value="Submit" class="btn btn-info mr-2">
                                    </div>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>

    <!-- MODAL ADD NEW COMMISSION -->
    <div class="modal fade" id="NewCommissionModal" tabindex="-1" role="dialog" aria-labelledby="NewCommissionModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">New Commission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="newcommission-form" class="form" action="/artist/newcommission" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <h4 class="text-center text-white">New Commission</h4>
                        <div class="form-group">
                            <label for="commissionname" class="text">Commission Name:</label><br>
                            <input type="text" name="commissionname" id="commissionname" class="form-control {{ $errors->has('commissionname') ? 'is-invalid' : ''}}" value="{{ old('commissionname')}}">
                        </div>
                        <div class="form-group">
                            <label for="description" class="text">Description:</label><br>
                            <input type="text" name="description" id="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" value="{{ old('description')}}">
                        </div>
                        <div class="form-group">
                            <label for="price" class="text">Price:</label><br>
                            <input type="number" name="price" id="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : ''}}" value="{{ old('price')}}">
                        </div>
                        <div class="form-group">
                            <label for="slots" class="text">Available Slot:</label><br>
                            <input type="number" name="slots" id="slots" class="form-control {{ $errors->has('slots') ? 'is-invalid' : ''}}" value="{{ old('slots')}}">
                        </div>
                        <div class="form-group">
                            <label for="duration" class="text">Duration:</label><br>
                            <input type="text" name="duration" id="duration" class="form-control {{ $errors->has('duration') ? 'is-invalid' : ''}}" value="{{ old('duration')}}">
                        </div>
                        <div class="form-group">
                            <label for="category" class="text">Category:</label><br>
                            <input type="radio" name="category" id="vector" value="1">
                            <label for="vector" class="text">Vector</label><br>
                            <input type="radio" name="category" id="wpap" value="2">
                            <label for="wpap" class="text">WPAP</label><br>
                            <input type="radio" name="category" id="lineart" value="3">
                            <label for="lineart" class="text">Line Art</label><br>
                            <input type="radio" name="category" id="lowpoly" value="4">
                            <label for="lowpoly" class="text">Low Poly Art</label><br>
                            <input type="radio" name="category" id="flatdesign" value="5">
                            <label for="flatdesign" class="text">Flat Design Art</label><br>
                            <input type="radio" name="category" id="karikatur" value="6">
                            <label for="karikatur" class="text">Karikatur</label><br>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <label for="imageexample" class="text">Artwork Example:</label><br>
                                <input type="file" name="imageexample" id="imageexample" class="form-control {{ $errors->has('imageexample') ? 'is-invalid' : ''}}" value="{{ old('imageexample')}}">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" class="btn btn-primary" value="Tambah Commission">
                </div>
                </form>
            </div>
        </div>
    </div>

    @include('layout.partial.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>