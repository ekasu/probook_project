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
                    <li class="breadcrumb-item"><a href="index.html">Users</a></li>
                    <li class="breadcrumb-item active">Manage Users</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <a href="{{ route('register') }}" class="btn btn-primary mb-3">Add Admin</a>
        <hr>


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
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Updated</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $num = 1;
                                            @endphp
                                            @if ($user->count() > 0)
                                                @foreach ($user as $users)
                                                    <tr>
                                                        <td>{{ $num++ }}</td>
                                                        <td>{{ $users['name'] }}</td>
                                                        <td>{{ $users['email'] }}</td>
                                                        <td>{{ $users['created_at']->toDateString() }}</td>
                                                        <td>{{ $users['updated_at']->toDateString() }}</td>
                                                        <td><a href="{{ route('edit', $users) }}">Edit</a>| <a
                                                                Onclick="return ConfirmDelete();"
                                                                href="{{ route('destroy', $users) }}">Delete</a></td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                {{ 'There are no users' }}
                                            @endif



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
