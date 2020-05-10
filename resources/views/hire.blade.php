<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.partial.landingpageheader')
    @section('title', 'Hire')
</head>
<body>
@include('layout.partial.usernavbar')
<div class="jumbotron text-center">
  <div class="Header">
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleInterval" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleInterval" data-slide-to="1"></li>
    <li data-target="#carouselExampleInterval" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
  </div>
  
</div>

        <div class="container" style="background-color:#eeeeee; padding-bottom:20px">
        <div class="body container" >
        <div class="row container">   
            <div class="col-sm-4 col-md-offset-2 container" style="margin-top: 50px; margin-left:70px">
            <span><h3>{{$data->commission_name}}</h3></span>
            <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></span>
            <span><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></span>
            <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></span>
            <span><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></span>
            <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p></span>
            <span><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p></span>
            <br>
            <span><button type="button" class="btn btn-default" style="background-color: white">Category Tag</button></span>
            </div>
            <div class="col-sm-4 col-md-offset-2 rounded" style="background-color: white;margin-top: 50px;height: 550px;">
                <div class=" mt-5 text-center" > <img class="rounded-circle" src="social.png" alt="human" style="height: 100 px; width: 100px; margin-top: 10px;"></div>
                <div class="mt-5 text-center"><h3>{{$data -> artist_name}}</h3></div>
            <hr>
            <div style="margin-top: 150px;">
                <div class="row">
                <div class="col-md-3 col-sm-5 ">Status</div>
                <div class="col-md-3 col-sm-5 ">Status</div>
                <div class="col-md-3 col-sm-5 ">Status</div>
                <div class="col-md-3 col-sm-5 ">Status</div>  
                <p><br><br></p>
                </div>
            </div>
            
            <div class="Button text-center" >
            <button type="button" class="btn btn-default" style="background-color:#00adb5; color: white; margin-bottom: 10px;">Chat & Nego</button>
            </div>    
            </div>  
        </div>
        <div class="row align-items-center container">
            <div class="card col-sm-4 col-md-offset-2 container" style="background-color: white; margin-top: 30px; height: 200px; margin-left:80px">
                <div class="card-body container">
                    <br>
                    <div class="row">
                    <div class="col-md-10 col-sm-5 "><h5 class="card-title">Express packet</h5></div>
                    <div>0/4</div>
                    </div>              
                    <h6 class="card-subtitle mb-2 text-muted">Description for the packet</h6>
                    <hr>  
                </div>
                <div class="Card-footer container">        
                    <div class="row text-center">
                        <p class="card-text col-md-5">Duration</p>
                        <div class="col-md-3 col-sm-4 "><h5 style="color:#00adb5;">Price</h5></div>
                        <div class="col-md-3 col-sm-4 "><button type="button " class="btn btn-default btn-sm" style="background-color:#00adb5; color: white; margin-bottom: 10px;">Make <br> Commision</button></div>                  
                    </div>            
                </div>
            </div> 
            <div class="col-sm-4 col-md-offset-2"> 
                <div class="card" style="margin-top: 40px;">
                    <div class="card-body" style="background-color: white; margin-left: 20px; margin-top: 20px;">
                    
                        <h5 class="card-title" style="font-weight: bold;"> Verified Data</h5>
                        <br>
                        <b>Phone Number</b><br>
                        <b>Email</b><br>
                        <b>Instagram</b><br>
                        <b>Website</b>    
                    </div>
                </div> 
            </div>
        </div> 
            
        <div class="row container" style="margin-left: 50px;">
            <div class="col-sm-4 col-md-offset-2">
            <br>
            <h3>Commision Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>  
        </div>
        <div class="row container" style="margin-left: 50px;">
            <div class="col-sm-4 col-md-offset-2">
            <br>
            <h3>Work Procedure</h3>
            <ol class="list-group">
                <li class="list-group-item">chat dan nego dengan artist jika dibutuhkan.</li>
                <li class="list-group-item">silahkan tekan tombol "make commission" jika ingin memesan</li>
                <li class="list-group-item">silahkan isi data-data yang diperlukan</li>
                <li class="list-group-item">tunggu konfirmasi dari artist</li>
                <li class="list-group-item">cek status pemesanan di menu "Histroy Commission"</li>
            </ol>
              </div>  
             </div>  
            </div>
           </div>
           @include('layout.partial.footer')

       </body>
    </html>