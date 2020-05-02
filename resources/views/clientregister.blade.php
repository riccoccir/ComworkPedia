<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.partial.landingpageheader')
        @section('title', 'Client - Register')
    </head>
    <body>
        @include('layout.partial.guestnavbar')

        <div class="container mt-5 md-5">
            <div id="login">
                <div class="p-5">
                    <div id="register-row" class="row justify-content-center align-items-center">
                        <div id="register-column" class="col-md-6 align-items-center" >
                            <div id="register-box" class="col-md-12 p-5 rounded" style="background-color: #222831">
                                <form id="register-form" class="form" action="/postuserregister" method="POST">
                                    {{ csrf_field() }}
                                    <div class="text-center mb-4">
                                        <img src="images/logo-white.png" alt="logo" style="height:60px; width: 100px">
                                    </div>
                                    <h4 class="text-center text-white">Register as Client</h4>
                                    <div class="form-group">
                                        <label for="username" class="text-white">Username:</label><br>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="firstname" class="text-white">First Name:</label><br>
                                        <input type="text" name="firstname" id="firstname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname" class="text-white">Last Name:</label><br>
                                        <input type="text" name="lastname" id="lastname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="text-white">Email:</label><br>
                                        <input type="email" name="email" id="email" class="form-control">
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
                                        <input type="text" name="phonenumber" id="phonenumber" class="form-control">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                                    </div>
                                    <div id="register-link" class="text-right">
                                        <a href="/clientlogin" class="text-white">Login as client</a>
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