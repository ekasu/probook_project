@extends('includes.layout');

@section('container')
    ;

    <main id="main" class="main">
        @if (!empty(session('success')))
            <div class="alert alert-primary" id="success-alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Services</a></li>
                    <li class="breadcrumb-item active">Manage Services Section</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{ route('createservice') }}" class="btn btn-primary mb-2">Create article</a>

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">

                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th scope="col">N0</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Body</th>
                                                <th scope="col">Categoty</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $num = 1;
                                            @endphp
                                            @foreach ($data as $service_data)
                                                <tr>
                                                    <td>{{ $num++ }}</td>
                                                    <td>{{ $service_data->title }}</td>
                                                    <td>{{ $service_data->body }}</td>
                                                    <td>{{ $service_data->category }}</td>
                                                    <td>{{ $service_data->created_at }}</td>
                                                    <td><a href="{{ route('editservice', $service_data) }}">Edit</a>| <a
                                                            Onclick="return ConfirmDelete();"
                                                            href="{{ route('destroyservice', $service_data) }}">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection

<script>
    function ConfirmDelete() {
        return confirm("Are you sure you want to delete this user?");
    }
</script>
