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
                                <h3 class="text-primary">Update Article</h3>
                            </div>
                            <div class="card-body rounded">
                                <form method="POST" action="{{ route('updatehome', $homes) }}">
                                    @csrf
                                    <div class="row g-3">

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" name='title' class="form-control"
                                                    value="{{ $homes->title }}" id="title"
                                                    placeholder="Enter full title">
                                                <label for="subject">Full title</label>
                                                <div class="text-danger" id="success-alert">
                                                    @error('title')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" name='subTitle' class="form-control"
                                                    value="{{ $homes->subTitle }}" id="subTitle"
                                                    placeholder="Enter  subTitle">
                                                <label for="subject">subTitle</label>
                                                <div class="text-danger" id="success-alert">
                                                    @error('subTitle')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="subject">body</label>
                                            <div class="form-floating">

                                                <div class="">
                                                    <label for="" class="form-label"></label>
                                                    <textarea class="form-control" name="body" id="" value='{{ $homes->body }}' rows="3">{{ $homes->body }}</textarea>
                                                </div>

                                                <div class="text-danger" id="success-alert">
                                                    @error('body')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <div class="">
                                                    <label for="" class="form-label">Category</label>
                                                    <select class="form-select form-select-lg" name="category">
                                                        <option selected value=''>Select one</option>
                                                        <option value="top-section">Upper Section</option>
                                                        <option value="lower-section">Lower Section</option>


                                                    </select>
                                                </div>
                                                <div class="text-danger" id="success-alert">
                                                    @error('category')
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
                                            type="submit">Update Section</button>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <a class="btn btn-primary" href="{{ route('home') }}">Previus Page</a>
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
