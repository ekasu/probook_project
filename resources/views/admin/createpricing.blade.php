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
                                <h3 class="text-primary">Add Package</h3>
                            </div>
                            <div class="card-body rounded">
                                <form method="POST" action="{{ route('storepricing') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" name='name' class="form-control"
                                                    value="{{ old('name') }}" id="name" placeholder="Enter  name">
                                                <label for="subject">Name</label>
                                                <div class="text-danger" id="success-alert">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="subject">Description</label>
                                            <div class="form-floating">

                                                <div class="">
                                                    <label for="" class="form-label"></label>
                                                    <textarea class="form-control" name="description" id="" value='{{ old('description') }}'
                                                        placeholder="Enter description" rows="3"></textarea>
                                                </div>

                                                <div class="text-danger" id="success-alert">
                                                    @error('description')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" name='price' class="form-control"
                                                    value="{{ old('price') }}" id="price" placeholder="Enter  price">
                                                <label for="subject">Price</label>
                                                <div class="text-danger" id="success-alert">
                                                    @error('price')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="subject">Package Cover</label>
                                            <br><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name='cover[]' type="checkbox" id="" value="10 users included">
                                                <label class="form-check-label" for="">10 users included</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" name='cover[]' type="checkbox" id="" value="Email support">
                                                <label class="form-check-label" for="">Email support</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" name='cover[]' type="checkbox" id="" value="Help center access">
                                                <label class="form-check-label" for="">Help center access</label>
                                              </div>
                                              <br><br>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" name='cover[]' type="checkbox" id="" value="10 GB of storage">
                                                <label class="form-check-label" for="">10 GB of storage</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" name='cover[]' type="checkbox" id="" value="Phone and email support">
                                                <label class="form-check-label" for="">Phone and email support</label>
                                              </div>
                                              <div class="text-danger" id="success-alert">
                                                @error('cover')
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
                                    <button name="signin" class="btn btn-primary rounded py-2 px-3" type="submit">Add
                                        Plan</button>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <a class="btn btn-primary" href="{{ route('pricing') }}">Previus Page</a>
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
