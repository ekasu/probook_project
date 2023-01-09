
@extends('includes.layout');

@section('container')
    <main id="main" class="main">
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
                            <div class="card-header rounded mb-1">
                                <h3 class="text-primary">Update Admin</h3>
                            </div>
                            <div class="card-body rounded">
                                <form method="POST" action="{{ route('update', $users) }}">
                                    @csrf
                                    <div class="row g-3">

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="name" name='name' class="form-control"
                                                    value="{{ $users->name }}" id="name"
                                                    placeholder="Enter full name">
                                                <label for="subject">Full name</label>
                                                <div class="text-danger" id="success-alert">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" name='email' class="form-control"
                                                    value="{{ $users->email }}" id="email" placeholder="Enter  email">
                                                <label for="subject">Email</label>
                                                <div class="text-danger" id="success-alert">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" name='password' class="form-control"
                                                    value="{{ $users->password }}" id="password" placeholder="Enter  password">
                                                <label for="subject">Password</label>
                                                <div class="text-danger" id="success-alert">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                            </div>
                            <div class="card-footer rounded  text-muted">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <button name="signin" class="btn btn-primary rounded py-2 px-3"
                                            type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </main>
@endsection

<script>
    $("#success-alert").fadeTo(3000, 700).slideUp(700, function() {
        $("#success-alert").slideUp(700);
    });
</script>
