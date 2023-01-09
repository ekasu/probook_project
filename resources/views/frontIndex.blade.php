<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">
    <title>One page App</title>
</head>

<body>

    <div class="home" id="home">
        {{-- nav bar starts --}}
        <nav id="navtop" class="navbar navbar-expand-lg navbar-light bg-primary pb-5">
            <div class="container">
                <a class="navbar-brand home-text-color logo" href="#"><span><i class="bi bi-eject mx-1"
                            style="color: white;"></i></span>Business</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link home-text-color" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home-text-color" href="#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link home-text-color" href="#pricing">Pricing</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        {{-- nav bar ends --}}


        {{-- corporate web starts --}}
        <div id="home">
            <div class="bg-primary pb-5">
                <div class="container">
                    @foreach ($homedataupper as $data)
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-md-6 col-lg-6 col-sm-12 home-text-color justify-content-center">

                                <h3 class="justify-content-center mb-3">{{ $data->title }}</h3>
                                <div class="mb-4">
                                    {{ $data->body }}
                                </div>
                                <div class="row">
                                    <div class="col-md-4 justify-content-center align-items-center">
                                        <button type="button" class="btn btn-light text-primary">GET STARTED</button>
                                    </div>
                                    <div class="col-md-4 justify-content-center align-items-center">
                                        <i class="bi bi-play-btn mx-1" style="color: white; font-size: 34px;"></i><span>
                                            <span>Watch Intro</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <img src="{{ asset('images/' . $data->file) }}" alt="{{ 'Corporate website Image' }}"
                                    class="img-fluid rounded img-dimension">
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- corporate web ends --}}

        <div class="pb-5 pt-5 bg-light">
            <div class="container">
                <div class="container">
                    @foreach ($homedatalower as $datalower)
                        <div class="row g-2">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <img src="{{ asset('images/' . $datalower->file) }}"
                                    alt="{{ 'Corporate website Image' }}" class="img-fluid rounded img-dimension">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 mt-5">
                                <h6>--OUR STORY</h6>
                                <h4 class="mb-4">{{ $datalower->title }}</h4>

                                <div class="p-2 mb-3 rounded" style="background-color:rgba(219, 211, 200, 0.5) ">
                                    <div class="row g-0">
                                        <div class="col-md-3">
                                            <button type="button" name="" id="one"
                                                class="btn btn-light">Who
                                                we are</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" name="" id="one"
                                                class="btn btn-light">Our
                                                Vision</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" name="" id="one"
                                                class="btn btn-light">Our
                                                history</button>
                                        </div>

                                    </div>

                                </div>
                                <p class="paragraph">{{ $datalower->body }}</p>
                            </div>

                        </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
    {{-- end of section  --}}


    {{-- start of service section  --}}
    <div class="pb-5 pt-5 container" id="services" style="background-color: white">

        <div class="justify-content-center d-flex mb-5">
            <button type="button" class="btn btn-outline-primary rounded-pill">Services</button>
        </div>


        <div class="row justify-content-center g-2 mb-2 d-flex align-items-center">
            <div class="col-md-3 col-lg-3 col-sm-12 shadow p-3 bg-body rounded m-1 border">
                @foreach ($servicedataone as $servicedataones)
                    <div class="icons d-flex justify-content-center mb-3">

                        <i class="bi bi-link px-2 icon-design"></i>

                    </div>

                    <div class="title mb-3 d-flex justify-content-center">
                        {{ $servicedataones->title }}
                    </div>
                    <p class="d-flex justify-content-center">
                        {{ $servicedataones->body }}
                    </p>
                @endforeach
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 shadow p-3 bg-body rounded m-1 border">
                @foreach ($servicedatatwo as $servicedatatwos)
                    <div class="icons d-flex justify-content-center mb-3">

                        <i class="bi bi-bootstrap-fill px-2 icon-design"></i>

                    </div>

                    <div class="title mb-3 d-flex justify-content-center">
                        {{ $servicedatatwos->title }}
                    </div>
                    <p class="d-flex justify-content-center">
                        {{ $servicedatatwos->body }}
                    </p>
                @endforeach
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 shadow p-3 bg-body rounded m-1 border">
                @foreach ($servicedatathree as $servicedatathrees)
                    <div class="icons d-flex justify-content-center mb-3">
                        <i class="bi bi-r-circle px-2 icon-design"></i>
                    </div>

                    <div class="title mb-3 d-flex justify-content-center">
                        {{ $servicedatathrees->title }}
                    </div>
                    <p class="d-flex justify-content-center">
                        {{ $servicedatathrees->body }}
                    </p>
            </div>
            @endforeach
        </div>

        <div class="row justify-content-center g-2 d-flex align-items-center mb-2">
            <div class="col-md-3 col-lg-3 col-sm-12 shadow p-3 bg-body rounded m-1 border">
                @foreach ($servicedatafour as $servicedatafours)
                    <div class="icons d-flex justify-content-center mb-3">

                        <i class="bi bi-speedometer2 px-2 icon-design"></i>
                    </div>

                    <div class="title mb-3 d-flex justify-content-center">
                        {{ $servicedatafours->title }}
                    </div>
                    <p class="d-flex justify-content-center">
                        {{ $servicedatafours->body }}
                    </p>
                @endforeach
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 shadow p-3 bg-body rounded m-1 border">
                @foreach ($servicedatafive as $servicedatafives)
                    <div class="icons d-flex justify-content-center mb-3">
                        <i class="bi bi-border-width px-2 icon-design"></i>
                    </div>

                    <div class="title mb-3 d-flex justify-content-center">
                        {{ $servicedatafives->title }}
                    </div>
                    <p class="d-flex justify-content-center">
                        {{ $servicedatafives->body }}
                    </p>
                @endforeach
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 shadow p-3 bg-body rounded m-1 border">
                @foreach ($servicedatasix as $servicedatasixs)
                    <div class="icons d-flex justify-content-center mb-3">
                        <i class="bi bi-collection-fill px-2 icon-design"></i>
                    </div>

                    <div class="title mb-3 d-flex justify-content-center">
                        {{ $servicedatasixs->title }}
                    </div>
                    <p class="d-flex justify-content-center">
                        {{ $servicedatasixs->body }}
                    </p>
                @endforeach
            </div>
        </div>


    </div>
    {{-- end of service section  --}}



    {{-- pricing section start --}}
    <div class="bg-light" id="pricing">
        <div class="container mp-5 pb-5">
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-outline-primary rounded-pill m-4 mb-5 mt-5">Pricing</button>
            </div>


            <div class="container">
                <div class="row justify-content-center d-flex align-items-center g-2">
                    <div class="col-md-3 rounded col-lg-3 col-sm-12 shadow p-4 m-2">
                        @foreach ($pricingStarter as $pricingStarters)
                            <div class="m-2 d-flex justify-content-center">
                                <button type="button"
                                    class="btn btn-outline-primary rounded-pill mb-3">{{ $pricingStarters->name }}</button>
                            </div>
                            <p class="mb-3 d-flex justify-content-center">{{ $pricingStarters->description }}
                            </p>

                            <div class="mb-3 d-flex container justify-content-center">
                                <span>$</span>
                                <h1>{{ $pricingStarters->price }}</h1>
                                <span style="position:relative; bottom:-18px;">/mo</span>

                            </div>

                            <div class="mb-3 d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-primary">START FREE TRIAL</button>
                            </div>

                            <ul class="listitem">
                                <li class="mb-1">{{ $pricingStarters->cover }}</li><br>

                            </ul>
                        @endforeach
                    </div>
                    <div class="col-md-3 rounded col-lg-3 col-sm-12 shadow p-4 m-2">
                        @foreach ($pricingExclusive as $pricingExclusives)
                            <div class="m-2 d-flex justify-content-center">
                                <button type="button"
                                    class="btn btn-outline-primary rounded-pill mb-3">{{ $pricingExclusives->name }}</button>
                            </div>
                            <p class="mb-3 d-flex justify-content-center">{{ $pricingExclusives->description }}
                            </p>

                            <div class="mb-3 d-flex container justify-content-center">
                                <span>$</span>
                                <h1>{{ $pricingExclusives->price }}</h1>
                                <span style="position:relative; bottom:-18px;">/mo</span>

                            </div>

                            <div class="mb-3 d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-primary">START FREE TRIAL</button>
                            </div>

                            <ul class="listitem">
                                <li class="mb-1">{{ $pricingExclusives->cover }}</li>

                            </ul>
                        @endforeach
                    </div>
                    <div class="col-md-3 rounded col-lg-3 col-sm-12 shadow p-4 m-2">
                        @foreach ($pricingPremium as $pricingPremiums)
                            <div class="m-2 d-flex justify-content-center">
                                <button type="button"
                                    class="btn btn-outline-primary rounded-pill mb-3">{{ $pricingPremiums->name }}</button>
                            </div>
                            <p class="mb-3 d-flex justify-content-center">{{ $pricingPremiums->description }}
                            </p>

                            <div class="mb-3 d-flex container justify-content-center">
                                <span>$</span>
                                <h1>{{ $pricingPremiums->price }}</h1>
                                <span style="position:relative; bottom:-18px;">/mo</span>

                            </div>

                            <div class="mb-3 d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-primary">START FREE TRIAL</button>
                            </div>

                            <ul class="listitem">
                                <li class="mb-1">{{ $pricingPremiums->cover }}</li>

                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- pricing section ends --}}

    {{-- footer starts --}}
    <div class="bg-primary p-5">
        @foreach ($footer as $footer)
            <div class="d-flex justify-content-center text-white">
                {{-- <h2 class="mb-3">We love to make perfect </br> solution for your business</h2> --}}
                <h2 class="mb-3">{{ $footer->title }}</h2>
            </div>
            {{-- <p class="d-flex justify-content-center text-white mb-5">Why I say, web design is about creating web sites
            which
            automatically adjust </br> themselves to look good on all devices, from small phones to large desktops.
        </p> --}}

            <p class="d-flex justify-content-center text-white mb-5">{{ $footer->description }}</p>

            <div class="d-flex justify-content-center text-white mb-5">

                <button type="button" class="btn btn-outline-light">GET STARTED</button>
            </div>
        @endforeach
    </div>

    {{-- footer ends  --}}

</body>
<script src="{{ asset('assets/js/jquery-3.6.1.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui/external/jquery/jquery.js') }}"></script>
<script src=""></script>

<script>
    $(function() {
        $('.navbar-nav a').on('click', function() {
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top()
            }, 500);
        });
    });

    $(document).ready(function() {
        $("#one").click(function() {
            $(".paragraph").toggle();
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navtop').classList.add('fixed-top');
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navtop').classList.remove('fixed-top');

                document.body.style.paddingTop = '0';
            }
        });
    });
</script>

</html>
