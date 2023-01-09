<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>

<body>

    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="contact-text py-5  fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">

                        <div class="center-form">
                        </div>

                        <div class="toast align-items-center text-white bg-primary border-0" role="alert"
                            aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                        @if (!empty(session('logoutsuccess')))
                            <div class="alert alert-primary" id="success-alert">
                                {{ session('logoutsuccess') }}
                            </div>
                        @endif

                        <div class="card" style="margin-left: auto; margin-right:auto;">

                            <div class="card-header">
                                <h3 class="text-primary">Sign In</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row g-3">

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" name='email' class="form-control"
                                                    value="{{ old('email') }}" id="email"
                                                    placeholder="Enter Email">
                                                <label for="subject">Email</label>
                                                <div class="text-danger">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" name='password' class="form-control"
                                                    id="subject" placeholder="Enter Password">
                                                <label for="subject">Password</label>
                                                <div class="text-danger">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </div>
                            <div class="card-footer  text-muted">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <button name="signin" class="btn btn-primary rounded py-3 px-5"
                                            type="submit">sign in</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</body>

</html>
