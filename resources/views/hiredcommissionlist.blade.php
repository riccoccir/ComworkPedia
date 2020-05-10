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
        @if($data->isEmpty())
            <div class="mt=3">
                <h3>No Data</h3>
            </div>
        @endif
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
                        <td><a href="{{ url($row->image_from_client) }}" target="_blank">{{ $row->image_from_client }}</a></td>
                        <td><a href="{{ url($row->image_from_artist) }}" target="_blank">{{ $row->image_from_artist }}</a></td>
                        <td>{{ $row->transaction_status }}</td>
                        <td>
                            @if($row->transaction_status != 'accepted')
                            <div class="d-flex">
                                <a href="#" data-toggle="modal" data-target="#acceptCommission-{{ $row->hire_id }}"><input type="button" value="Accept" class="btn btn-info mr-2"></a>
                                <a href="#" data-toggle="modal" data-target="#revisionCommission-{{ $row->hire_id }}"><input type="button" value="Revision" class="btn btn-primary mr-2"></a>
                            </div>
                            @endif
                        </td>
                    </tr>
                    <!-- MODAL ACCEPT RESULT-->
                    <div class="modal fade" id="acceptCommission-{{ $row->hire_id }}" tabindex="-1" role="dialog" aria-labelledby="acceptcommissionmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Accept Commission</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Anda yakin ingin menerima Commission ini?</h5>
                                    <p class="text-danger">*CATATAN: pesanan yang sudah diterima tidak bisa di revisi lagi</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="/commission/accept/{{ $row->hire_id }}"><input type="button" class="btn btn-primary" value="Ya"></a>
                                    <a href="#" data-dismiss="modal" aria-label="Close"><input type="button" class="btn btn-primary" value="Tidak"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL REVISION-->
                    <div class="modal fade" id="revisionCommission-{{ $row->hire_id }}" tabindex="-1" role="dialog" aria-labelledby="revisioncommissionmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Revision Commission</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Anda yakin ingin mengajukan revisi pada pesanan ini?
                                </div>
                                <div class="modal-footer">
                                    <a href="/commission/revision/{{ $row->hire_id }}"><input type="button" class="btn btn-primary" value="Ya"></a>
                                    <a href="#" data-dismiss="modal" aria-label="Close"><input type="button" class="btn btn-primary" value="Tidak"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @include('layout.partial.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>