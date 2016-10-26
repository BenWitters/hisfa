@extends('layouts.app')

@section('content')
    <h1>Instellingen voor {{$user->name}}</h1>

    <!-- set notification -->
    <form class="form-horizontal" method="POST" action="/manageaccounts/{{$user->id}}">
        {{ csrf_field() }}

        <fieldset>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_prime'] == 1 ? 'checked' : ''}}  name="can_view_dashboard" value="dashboard">
                            Kan dashboard bekijken
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_waste'] == 1 ? 'checked' : ''}} name="can_view_blocks" value="viewBlocks">
                            Kan blokken stock bekijken
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_waste'] == 1 ? 'checked' : ''}} name="can_update_blocks" value="updateBlocks">
                            Kan blokken stock beheren
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_waste'] == 1 ? 'checked' : ''}} name="can_view_waste" value="viewWaste">
                            Kan afvalsilo's bekijken
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_waste'] == 1 ? 'checked' : ''}} name="can_manage_waste" value="updateWaste">
                            Kan afvalsilo's beheren
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_waste'] == 1 ? 'checked' : ''}} name="can_view_prime" value="viewPrime">
                            Kan primesilo's bekijken
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_waste'] == 1 ? 'checked' : ''}} name="can_manage_prime" value="updatePrime">
                            Kan primesilo's beheren
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['get_notifications_waste'] == 1 ? 'checked' : ''}} name="is_admin" value="isAdmin">
                            Kan gebruikers beheren
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button class="btn btn-primary">Bewaar account instellingen</button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection

@section('footerscripts')

@endsection