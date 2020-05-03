<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.partial.landingpageheader')
        @section('title', 'Artist - Register')
    </head>
    <body>
        @include('layout.partial.guestnavbar')

        <div class="container mt-5 md-5">
            <div id="login">
                <div class="p-5">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6 align-items-center" >
                            <div id="login-box" class="col-md-12 p-5 rounded" style="background-color: #222831">
                                <form id="login-form" class="form" action="/postartistregister" method="POST">
                                    {{ csrf_field() }}
                                    <div class="text-center mb-4">
                                        <img src="images/logo-white.png" alt="logo" style="height:60px; width: 100px">
                                    </div>
                                    <h4 class="text-center text-white">Register as Artist</h4>
                                    <div class="form-group">
                                        <label for="username" class="text-white">Username:</label><br>
                                        <input type="text" name="username" id="username" class="form-control" class="form-control {{ $errors->has('username') ? 'is-invalid' : ''}}" value="{{ old('username')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="text-white">Email:</label><br>
                                        <input type="email" name="email" id="email" class="form-control" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" value="{{ old('email')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-white">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="retypepassword" class="text-white">Re-Type Password:</label><br>
                                        <input type="password" name="retypepassword" id="retypepassword" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="phonenumber" class="text-white">Phone Number:</label><br>
                                        <input type="text" name="phonenumber" id="phonenumber" class="form-control" class="form-control {{ $errors->has('phonenumber') ? 'is-invalid' : ''}}" value="{{ old('phonenumber')}}">
                                    </div>
                                    <h5 class="text-white">Portofolio</h5>
                                    <div class="form-group">
                                        <label for="instagram" class="text-white">Instagram:</label><br>
                                        <input type="text" name="instagram" id="instagram" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="website" class="text-white">Website:</label><br>
                                        <input type="text" name="website" id="website" class="form-control">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                                    </div>
                                    <div id="register-link" class="text-right">
                                        <a href="/artistlogin" class="text-white">Login as Artist</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layout.partial.footer')
    </body>
</html>