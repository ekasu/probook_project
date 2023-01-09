@extends('includes.layout');

@section('container')
    ;

    <main id="main" class="main">

    <div class="card ml-5 mb-3" style="max-width: 60rem;">
        <form action="{{ route('resetpassword') }}" method="post">
            @csrf
            <div class="card-header">Reset Password</div>
            <div class="card-body">

                @if (session('error1'))
                    <div class="alert alert-danger">

                        {{ session('error1') }}

                    </div>
                @endif

                <div class="mb-2">
                    <label for="" class="form-label">Old Password</label>
                    <input type="password" class="form-control" name="oldpassword" id="" aria-describedby="helpId"
                        placeholder="Enter Old Password">
                </div>
                <div class="text-danger">
                    @error('oldpassword')
                        {{ $message }}
                    @enderror
                </div>
                <hr>

                <div class="mb-2">
                    <label for="" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
                        placeholder="Enter New Password">
                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="" class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id=""
                        aria-describedby="helpId" placeholder="Re-enter new Password">
                    <div class="text-danger">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <input name="" id="" class="btn btn-primary" type="submit" value="Change Password">
            </div>
        </form>
    </div>
</main><!-- End #main -->
@endsection
