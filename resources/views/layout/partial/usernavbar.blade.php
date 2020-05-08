<nav class="navbar navbar-expand navbar-dark" style="background-color: #222831">
    <div class="container">
        <a class="navbar-brand" href="/clienthome"><img src="{{url('/images/logo-white.png')}}" alt="logo" style="height:40px; width: 100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarGuest">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/commission/history"><input type="button" class="btn" value="History Commission" style="color: white; background-color: #222831"></a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown nav-link">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Halo, {{ (Auth::guard('client')->user())['client_name'] }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ action('ClientController@logout')}}">Logout</a>
                            </div>
                        </div>
                        <!-- <a class="nav-link" href="#"><input type="button" class="btn" value="" style="color: white; background-color: #222831"></a> -->
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>

<script src="{{ asset('js/app.js') }}"></script>
