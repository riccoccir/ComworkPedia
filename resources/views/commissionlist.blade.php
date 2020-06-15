<!DOCTYPE html>
<html lang="en">

<head>
  @extends('layout.partial.landingpageheader')
  @section('title', 'Commission List')
  <!-- Bootstrap core CSS -->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Custom styles for this template -->
  <!-- <link href="css/shop-homepage.css" rel="stylesheet"> -->

</head>

<body>

  <!-- Navigation -->
  @include('layout.partial.usernavbar')

  <!-- Page Content -->
  <div class="container mt-5 md-5" style="min-height: 600px">
      <h1 class="mt-5 mb-5">Commission list for {{ $commissioncategory }}</h1>
      <!-- /.col-lg-3 -->

      @if($allData->isEmpty())
        <div class="align-text-center">
          <h3>There is No Data</h3>
        </div>
      @endif
      <div class="col-centered">

        <div class="row">
          @foreach($allData as $data)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/commissionlist/{{$data->commission_type_id}}/commission/{{$data->commission_id}}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$data->commission_name}}</a>
                  </h4>
                  <h5>Rp. {{$data->commission_price}}</h5>
                  <p class="card-text">{{$data->commission_description}}</p>
                  <div display="flex"  style="justify-content:flex-end">
                  <a href="/commissionlist/{{$data->commission_type_id}}/commission/{{$data->commission_id}}">
                  <input type="button" class="btn btn-primary" value="Hire"></button> </a>
                </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->
      <div class="align-items-center">
      {{$allData->links()}}
      </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('layout.partial.footer')

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>
</html>