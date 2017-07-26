@if(request()->getRequestUri() == "/")

<header class="container-fluid header-content">
    <div class="row" id="header-navigation">
        <nav class="header-menu-bl col-md-12 navbar navbar-toggleable-md justify-content-center">
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navdrop" aria-controls="navdrop" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse main-navigation" id="navdrop">
                <ul class="navbar-nav header-menu">
                    <li class="nav-item">
                        <a class="nav-link"  href="#aboutus">О нас<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Портфолио</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#service">
                            Услуги
                        </a>
                        <button class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($services as $service)
                                <a class="dropdown-item" href="{{ url('/service/'.$service->slug) }}">{{$service->title}}</a>
                            @endforeach
                            <!-- <a class="dropdown-item" href="/service">Услуга 2</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="logo-link" href="#"><img src="/img/logo.svg" class="main-logo-girl" alt=""></a>
                        <a class="logo-anna-ki-fixed" href="#"><h1 class="logo-fixed">ANNA KI</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/vlog') }}">Vlog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-md-12 video-block">
            <video poster="/img/video-poster.png" id="bgvid" playsinline autoplay muted loop>
                <source src="/img/stylist.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</header>

@else

<header class="container-fluid header-content">
    <div class="row" id="header-navigation">
        <nav class="header-menu-bl col-md-12 navbar navbar-toggleable-md justify-content-center">
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navdrop" aria-controls="navdrop" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse main-navigation" id="navdrop">
                <ul class="navbar-nav header-menu">
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ url('/#aboutus') }}">О нас<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#portfolio') }}">Портфолио</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/#service') }}">
                            Услуги
                        </a>
                        <button class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($services as $service)
                                <a class="dropdown-item" href="{{ url('/service/'.$service->slug) }}">{{$service->title}}</a>
                            @endforeach
                            <!-- <a class="dropdown-item" href="/service">Услуга 2</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="logo-anna-ki-sinf" href="{{ url('/') }}"><h1 class="">ANNA KI</h1></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/vlog') }}">Vlog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#reviews') }}">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@endif
