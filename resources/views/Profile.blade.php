@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card bg-light shadow-lg">
                <div class="card-header" style="background-color: rgba(76, 112, 205, 0.8);"><h4 style="color: white"><i class="fi fi-ss-admin-alt"></i>&nbsp;&nbsp;My Profile</h4></div>
                <form  action="{{route('my.profile.picture')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('GET')
                <div class="card-body">
                    <div class="row justify-content-between pb-3">
                        <div class="col-lg-5 row justify-content-center pr-4 pl-2 mt-2 pt-2 pb-2">
                            <div class="profile_div">
                                <div class="profile_frame neon_border">
                                    <img src="{{ asset(Auth::User()->profile_pic) }}" class="profile"  alt=""/>
                                </div>
                                <div class="profile_status neon_border active_account "></div>
                                <label for="imageInput"><i class="fi fi-sr-cloud-upload-alt upload"></i></label>
                                <input type="file" name="image" id="imageInput" accept="image/*" style="display: none;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row justify-content-between">
                                <input id="id" name="id" value="{{Auth::User()->id}}" hidden>

                                <div class="col-md-6">
                                    <label class="col-form-label pt-4" >Firstname</label>
                                    <input class="form-control" id="firstname" name="firstname" value="{{Auth::User()->firstname}}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label pt-4" >Lastname</label>
                                    <input class="form-control" id="lastname" name="lastname" value="{{Auth::User()->lastname}}" readonly>
                                </div>
                            </div>

                            <label for="email" class="col-form-label pt-4">Email Address</label>
                            <input class="form-control" id="email" name="email" value="{{Auth::User()->email}}" readonly>

                            <label class="col-form-label pt-4" >Role</label>
                            <input type="text" class="form-control" value="{{Auth::User()->role}}" readonly>

                        </div>
                    </div>
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary form-control" style="background-color: rgba(90, 140, 228, 0.8);">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg bg-light">
                <div class="card-header" style="background-color: rgba(76, 112, 205, 0.8);"><h4 style="color:white"><i class="fi fi-ss-key"></i> Change Password </h4> </div>
                <form action="" method="POST">
                    @csrf
                    @method('GET')
                    <div class="card-body">
                        <label for="current_password" class="col-form-label">{{ __('Current Password') }}</label>
                        <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror " name="current_password" value="" required autocomplete="current-password" autofocus>
                        @error('current_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="password" class="col-form-label pt-4">{{ __('New Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                        <label for="password-confirm" class="col-form-label pt-4">{{ __('Confirm New Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>
                    <div class="card-footer bg-light">
                        <button type="submit" class="btn btn-primary form-control" style="background-color: rgba(90, 140, 228, 0.8);">{{ __('Change My Password') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('sidebar')
    @include('layouts.sidebar')
@endsection
<script>
    $('#imageInput').on('change', function(e) {

        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            $('.profile').attr('src', e.target.result);
        }

        reader.readAsDataURL(file);
    });

</script>
@endsection

