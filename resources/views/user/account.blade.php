@extends('layouts.app')

@section('content')

    <form class="form-horizontal" method="POST" action="/account/updatePassword">
        {{ csrf_field() }}

        @if( session('message') )
        <div class="alert-success">{{ session('message') }}</div>
        @endif
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

@endsection