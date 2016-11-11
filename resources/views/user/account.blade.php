@extends('layouts.app')

@section('content')
    <header class="view__sub silos">
        <div class="wrapper">
            <h1 class="view__sub__title"><?php echo Auth()->user()->name; ?></h1>
            <!-- <a href="{{ URL::to('blocks/create') }}" class="view__sub__button button">Bloktype toevoegen</a> -->
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <div class="wrapper content">
    @if( session('success') )
        <div class="alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert-danger">{{ session('error') }}</div>
    @endif
    
    <div class="form-container">
		<!-- change password -->
		<form class="form-horizontal form-container__item" method="POST" action="/account/updatePassword">
			{{ csrf_field() }}


			<fieldset>
				<h2>Wijzig wachtwoord</h2>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="newpass">Nieuw wachtwoord</label>
					<div class="col-md-4">
						<input id="newpass" name="password" type="password" placeholder="New password" class="form-control input-md inpt-field" required="">

					</div>
				</div>
				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="btnsave"></label>
					<div class="col-md-4">
						<!--<button id="btnsave" name="btnsave" class="btn btn-primary">Change password</button>-->
						<button id="btnsave" name="btnsave" class="button button--dark">Wijzig wachtwoord</button>
					</div>
				</div>

			</fieldset>
		</form>


		<!-- set notification -->
			<form class="form-horizontal form-container__item" method="POST" action="/account/updateNotificationSettings" enctype="multipart/form-data">
				{{ csrf_field() }}

				<fieldset>
					<h2>Notificatie instellingen</h2>

					<!-- Multiple Checkboxes -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="checkboxes"></label>
						<div class="col-md-4">
							<div class="checkbox">
								<label for="checkboxes-0">
									<input type="checkbox" {{ $userData['get_notifications_prime'] == 1 ? 'checked' : ''}}  name="get_notifications_prime" value="checkPrime">
									Ontvang Prime silo meldingen
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="checkboxes"></label>
						<div class="col-md-4">
							<div class="checkbox">
								<label for="checkboxes-0">
									<input type="checkbox" {{ $userData['get_notifications_waste'] == 1 ? 'checked' : ''}} name="get_notifications_waste" value="checkWaste">
									Ontvang waste silo meldingen
								</label>
							</div>
						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="singlebutton"></label>
						<div class="col-md-4">
							<button class="button button--dark">Bewaar notificatie instellingen</button>
						</div>
					</div>

				</fieldset>
			</form>
       
       		<!-- change profile picture -->

			<form class="form-horizontal form-container__item" method="POST" action="/account/updateProfilePicture" enctype="multipart/form-data">
				{{ csrf_field() }}

				<fieldset>
					<h2>Wijzig profielfoto</h2>

					<div class="avatar--profile-page" style="background-image: url(img/profilePictures/<?php echo Auth()->user()->profile_picture; ?>)"></div>

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
							<button id="btnsave" name="btnsave" class="button button--dark">Wijzig profielfoto</button>
						</div>
					</div>

				</fieldset>
			</form>
        </div>
    </div>
@endsection