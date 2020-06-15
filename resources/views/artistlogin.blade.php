<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.partial.landingpageheader')
        @section('title', 'Artist - Login')
    </head>
    <body>
        @include('layout.partial.guestnavbar')

        <div class="container mt-5 md-5" style="min-height: 600px">
            <div id="login">
                <div class="p-5">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6 align-items-center" >
                            <div id="login-box" class="col-md-12 p-5 rounded" style="background-color: #222831">
                                <form id="login-form" class="form" action="/postArtistLogin" method="post">
                                {{csrf_field()}}
                                    <div class="text-center mb-4">
                                        <img src="images/logo-white.png" alt="logo" style="height:60px; width: 100px">
                                    </div>
                                    <h4 class="text-center text-white">Log in with your artist account</h4>
                                    <div class="form-group">
                                        <label for="email" class="text-white">Email:</label><br>
                                        <input type="text" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" value = "{{ old('email') }}">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors ->first('email')}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-white">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}">
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors ->first('password')}}
                                            </div>
                                        @endif
                                    </div>
                                    <label for="remember-me" class="text-white"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                    </div>
                                    <div id="register-link" class="text-right">
                                        <a href="/artistregister" class="text-white">Register as artist</a>
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