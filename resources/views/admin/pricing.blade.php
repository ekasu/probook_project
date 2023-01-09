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
                    <li class="breadcrumb-item"><a href="index.html">Pricing</a></li>
                    <li class="breadcrumb-item active">Manage Pricing Section</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <a href="{{ route('createpricing') }}" class="btn btn-primary mb-2">Create Package</a>

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">


                        <div class="card top-selling overflow-auto">

                            <div class="card-body pb-0">

                                <table class="table table-bordered table-stripped">

                                    <tr>
                                        <th scope="col">N0</th>
                                        <th scope="col">name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">price</th>
                                        <th scope="col">Covered</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>

                                    <tbody>
                                        @php
                                            $num = 1;
                                        @endphp
                                        @foreach ($data as $data)
                                            <tr>
                                                <td>{{ $num++ }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->description }}</td>
                                                <td>{{ $data->price }}</td>
                                                <td>{{ $data->cover }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td><a href="{{ route('editpricing', $data) }}">Edit</a>| <a
                                                        Onclick="return ConfirmDelete();"
                                                        href="{{ route('destroypricing', $data) }}">Delete</a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->


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
