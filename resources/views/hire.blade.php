<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.partial.landingpageheader')
    @section('title', 'Hire')
</head>
<body>
@include('layout.partial.usernavbar')

  <div class="Header">
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleInterval" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleInterval" data-slide-to="1"></li>
    <li data-target="#carouselExampleInterval" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="{{url('uploads/commission/'.$data->commission_image)}}" class="d-block w-100" alt="Linear Art" width="400px" height="300px">
      <div class="carousel-caption d-none d-md-block text-dark">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('uploads/commission/'.$data->commission_image)}}" class="d-block w-100" alt="Linear Art" width="400px" height="300px">
      <div class="carousel-caption d-none d-md-block text-dark">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('uploads/commission/'.$data->commission_image)}}" class="d-block w-100" alt="Linear Art" width="400px" height="300px">
      <div class="carousel-caption d-none d-md-block text-dark">
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
                <div class=" mt-5 text-center" > <img class="rounded-circle" src="{{url('/images/social.png')}}" alt="human" style="height: 100 px; width: 100px; margin-top: 10px;"></div>
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
                    <div class="col-md-8 col-sm-5 "><h5 class="card-title">Express packet</h5></div>
                    <div class="col-md-4 col-sm-5">{{$data->slot_available}} slot remaining</div>
                    </div>              
                    <h6 class="card-subtitle  mb-1 text-muted">Description for the packet</h6>
                    <hr>  
                </div>
                <div class="Card-footer container">        
                    <div class="row text-center">
                        <p class="card-text mt-2 col-md-5">{{ $data->commission_duration}} hari</p>
                        <div class="col-md-3 mt-2 col-sm-4 "><h6 style="color:#00adb5;">{{$data->commission_price}}</h6></div>
                        <div class="col-md-3 col-sm-4 "><a class="nav-link" href="#" data-toggle="modal" data-target="#HireModal"><button type="button " class="btn btn-default btn-sm" style="background-color:#00adb5; color: white; margin-bottom: 10px;">Make <br> Commision</button></a>
                        </div>
                        </div>
      <div class="modal fade" id="HireModal" tabindex="-1" role="dialog" aria-labelledby="HireModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Hire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="hire-form" class="form" action="/hire/hiring/{{ $data->commission_id }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="bankname" class="text font-weight-bold">Bank : {{$data->bank_name}}</label><br>
                          <label for="accountnumber" class="text font-weight-bold">Nomor Rekening : {{$data->bank_account_number}}</label><br>
                          <label for="accountownership" class="text font-weight-bold">Atas nama: {{$data->account_ownership}}</label>
                        <div class="form-group">
                            <label for="imagelink" class="text">Image Link:</label><br>
                            <input type="text" name="imagelink" id="imagelink" class="form-control {{ $errors->has('imagelink') ? 'is-invalid' : ''}}" value="{{ old('imagelink')}}">
                        </div>
                        <div class="form-group">
                            <label for="payment_amount" class="text">Payment Amount: Rp {{$data->commission_price}}</label><br>
                            <input type="textarea" name="payment_amount" id="payment_amount" class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : ''}}" value="{{ old('payment_ammount')}}">
                        </div>
                        <div class="form-group">
                            <label for="category" class="text">Pembayaran:</label><br>
                            <input type="radio" name="category" id="ovo" value="1">
                            <label for="ovo" class="text">OVO</label><br>
                            <input type="radio" name="category" id="gopay" value="2">
                            <label for="gopay" class="text">Go-Pay</label><br>
                            <input type="radio" name="category" id="Bank" value="3">
                            <label for="bank" class="text">Bank</label><br>
                        </div>
                        <div class="form-group">
                            
                                <label for="notification" class="text-center font-weight-bold">Mohon untuk mengirimkan bukti transfer pada halaman commission history</label><br>
                                
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" class="btn btn-primary" value="Create Hire">
                </div>
                </form>
            </div>
        </div>
    </div>                  
                    </div>            
                </div>
            </div> 
            <div class="col-sm-4 col-md-offset-2"> 
                <div class="card" style="margin-top: 40px;">
                    <div class="card-body" style="background-color: white; margin-left: 20px; margin-top: 20px;">
                    
                        <h5 class="card-title" style="font-weight: bold;"> Verified Data</h5>
                        <br>
                        <div class="row">
                        <b class="col-sm-6">Phone Number</b> <p class=col-sm-8> {{$data->artist_phoneNumber}}</p>
                        <b class="col-sm-5">Email </b> <p class="col-sm-8">{{$data->artist_email}}</p>
                        <b class="col-sm-6">Instagram</b> <p class="col-sm-8">{{$data->artist_instagram}}</p>
                        <b class="col-sm-6">Website</b> <p class="col-sm-8"> {{$data->artist_website}}</p>    
                    </div>
                </div> 
            </div>
        </div> 
            
        <div class="row container" style="margin-left: 50px;">
            <div class="col-sm-4 col-md-offset-2">
            <br>
            <h3>Order Description</h3>
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