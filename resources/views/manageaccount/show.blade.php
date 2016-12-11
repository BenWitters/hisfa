@extends('layouts.app')

@section('content')
        <header class="view__sub users">
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Gebruikers</span>
            <a class="view__sub__back" href="/manageaccounts">BACK</a>
            <h1 class="view__sub__title">Accountinstellingen: {{$user->name}}</h1>
        </div>
            
            <div class="view__top__overlay"></div>
        </header>
        <div class="wrapper content">
        <h2>Permissies</h2>
    <!-- set notification -->
    <form class="form-horizontal" method="POST" action="/manageaccounts/updateAccountSettings">
        {{ csrf_field() }}

            <div class="form-group">
                <div class="col-md-4">
                    <input name="id" type="hidden" value="{{ $user->id }}" class="form-control input-md">

                </div>
            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes"></label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" {{ $user['can_view_dashboard'] == 1 ? 'checked' : ''}}  name="can_view_dashboard" value="viewDashboard">
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
                            <input type="checkbox" {{ $user['can_view_blocks'] == 1 ? 'checked' : ''}} name="can_view_blocks" value="viewBlocks">
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
                            <input type="checkbox" {{ $user['can_update_blocks'] == 1 ? 'checked' : ''}} name="can_update_blocks" value="updateBlocks">
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
                            <input type="checkbox" {{ $user['can_view_waste'] == 1 ? 'checked' : ''}} name="can_view_waste" value="viewWaste">
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
                            <input type="checkbox" {{ $user['can_update_waste'] == 1 ? 'checked' : ''}} name="can_update_waste" value="updateWaste">
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
                            <input type="checkbox" {{ $user['can_view_prime'] == 1 ? 'checked' : ''}} name="can_view_prime" value="viewPrime">
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
                            <input type="checkbox" {{ $user['can_update_prime'] == 1 ? 'checked' : ''}} name="can_update_prime" value="updatePrime">
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
                            <input type="checkbox" {{ $user['is_admin'] == 1 ? 'checked' : ''}} name="is_admin" value="isAdmin">
                            Kan gebruikers beheren
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button class="button button--dark">Opslaan</button>
                </div>
            </div>

    </form>
@endsection

@section('footerscripts')

@endsection