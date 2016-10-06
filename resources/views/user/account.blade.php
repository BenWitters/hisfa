@extends('layouts.app')

@section('content')
    @if( session('success') )
        <div class="alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert-danger">{{ session('error') }}</div>
    @endif
    <!-- change password -->
    <form class="form-horizontal" method="POST" action="/account/updatePassword">
        {{ csrf_field() }}


        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="newpass">New password</label>
                <div class="col-md-4">
                    <input id="newpass" name="password" type="password" placeholder="New password" class="form-control input-md" required="">

                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btnsave"></label>
                <div class="col-md-4">
                    <button id="btnsave" name="btnsave" class="btn btn-primary">Change password</button>
                </div>
            </div>

        </fieldset>
    </form>


    <!-- change profile picture -->

    <form class="form-horizontal" method="POST" action="/account/updateProfilePicture" enctype="multipart/form-data">
        {{ csrf_field() }}

        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="newProfilePicture">Profielfoto</label>
                <div class="col-md-4">
                    <input id="profilePicture" name="profile_picture" type="file"class="form-control" required="" accept="image/*;capture=camera">
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btnsave"></label>
                <div class="col-md-4">
                    <button id="btnsave" name="btnsave" class="btn btn-primary">Wijzig profielfoto</button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection