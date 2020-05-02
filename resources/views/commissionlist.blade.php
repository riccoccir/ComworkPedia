<!DOCTYPE html>
<html lang="en">

<head>
  @extends('layout.partial.landingpageheader')
  @section('title', 'List')
  <!-- Bootstrap core CSS -->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Custom styles for this template -->
  <!-- <link href="css/shop-homepage.css" rel="stylesheet"> -->

</head>

<body>

  <!-- Navigation -->
  @include('layout.partial.guestnavbar')

  <!-- Page Content -->
  <div class="container mt-5">
      <h1 class="mt-5 mb-5">Commission list for {{ $commissioncategory }}</h1>
      <!-- /.col-lg-3 -->

      <div class="col-centered">

        <div class="row">
          @for($i = 1; $i <= 12; $i++)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item One</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">bagian deskripsi</p>
              </div>
            </div>
          </div>
          @endfor
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->
  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('layout.partial.footer')

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>
</html>