@extends('layouts.app')

@section('content')

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
            @if( session('success') )
                <div class="alert-success">{{ session('success') }}</div>
            @elseif(session('error'))
                <div class="alert-danger">{{ session('error') }}</div>
            @endif
        </fieldset>
    </form>

@endsection