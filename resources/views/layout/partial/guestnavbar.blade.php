<nav class="navbar navbar-expand navbar-dark" style="background-color: #222831">
    <div class="container">
        <a class="navbar-brand" href="/home"><img src='images/logo-white.png' alt="logo" style="height:40px; width: 100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarGuest">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"><input type="button" class="btn" value="Login" style="color: white; background-color: #222831"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" data-toggle="modal" data-target="#registerModal"><input type="button" class="btn" value="Register" style="color: white; background-color: #00ADB5"></a>
                </li>
            </ul>
        </form>
        </div>
    </div>
</nav>

<!-- Modal Login-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
                please choose your account type
        </div>
            <div class="modal-footer">
                <a href="/clientlogin"><input type="button" class="btn btn-primary" value="As Client"></a>
                <a href="/artistlogin"><input type="button" class="btn btn-primary" value="As Artist"></a>
            </div>
        </div>
    </div>
</div>


<!-- Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            please choose your account type
        </div>
            <div class="modal-footer text-center">
                <a href="/clientregister"><input type="button" class="btn btn-primary" value="As Client"></a>
                <a href="/artistregister"><input type="button" class="btn btn-primary" value="As Artist"></a>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>