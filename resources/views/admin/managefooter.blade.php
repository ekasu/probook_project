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
                    <li class="breadcrumb-item"><a href="index.html">Footer Information</a></li>
                    <li class="breadcrumb-item active">Manage Footer</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        {{-- <a href="{{ route('showform') }}" class="btn btn-primary mb-3">Add Footer</a> --}}
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
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $num = 1;
                                            @endphp
                                            @if ($data->count() > 0)
                                                @foreach ($data as $datas)
                                                    <tr>
                                                        <td>{{ $num++ }}</td>
                                                        <td>{{ $datas['title'] }}</td>
                                                        <td>{{ $datas['description'] }}</td>
                                                        <td>{{ $datas['created_at']->toDateString() }}</td>
                                                        <td><a href="{{ route('editfooter', $datas) }}">Edit</a>
                                                            {{-- | <a
                                                                Onclick="return ConfirmDelete();"
                                                                href="{{ route('destroyfooter', $datas) }}">Delete</a></td> --}}
                                                    </tr>
                                                @endforeach
                                            @else
                                                {{ 'There are no data' }}
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
