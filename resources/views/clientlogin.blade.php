<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.partial.landingpageheader')
        @section('title', 'client - login')
    </head>
    <body>
        @include('layout.partial.guestnavbar')

        <div class="container mt-5 md-5">
            <div id="login">
                <div class="p-5">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6 align-items-center" >
                            <div id="login-box" class="col-md-12 p-5 rounded" style="background-color: #222831">
                                <form id="login-form" class="form" action="" method="post">
                                    <h3 class="text-center text-white">Login</h3>
                                    <h4 class="text-center text-white">Log in with your guest account</h4>
                                    <div class="form-group">
                                        <label for="username" class="text-white">Username:</label><br>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-white">Password:</label><br>
                                        <input type="text" name="password" id="password" class="form-control">
                                    </div>
                                    <label for="remember-me" class="text-white"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                    <div class="form-group text-center">
                                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                    </div>
                                    <div id="register-link" class="text-right">
                                        <a href="/clientregister" class="text-white">Register here</a>
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