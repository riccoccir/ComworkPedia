<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layout.partial.landingpageheader')
    @section('title', 'Artist - Dashboard')
</head>

<body>
    @include('layout.partial.artistnavbar')

    <div class="container mt-5" style="min-height: 600px">
        <div class='mt-5'>
            <a class="nav-link" href="#" data-toggle="modal" data-target="#NewCommissionModal"><input type="button" class="btn btn-info" value="Create New Commission"></a>
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
                    <form id="newcommission-form" class="form" action="'/artist/postnewcommission'" method="POST">
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
                            <div class="custom-file">
                                <label for="imageexample" class="text">Artwork Example:</label><br>
                                <input type="file" name="imageexample" id="imageexample" class="form-control {{ $errors->has('imageexample') ? 'is-invalid' : ''}}" value="{{ old('imageexample')}}">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                   <input type="submit" name="submit" class="btn btn-primary" value="Tambah Commission">
                </div>
            </div>
        </div>
    </div>

    @include('layout.partial.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>