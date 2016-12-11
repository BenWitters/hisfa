@extends('layouts.app')

@section('content')
    <header class="view__sub silos">
        <div class="wrapper">
            <h1 class="view__sub__title">Hallo, <?php echo Auth()->user()->name; ?></h1>
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
    
    <div class="view__card">
    			<form class="form-horizontal form-container__item" method="POST" action="/account/updatePassword">
			{{ csrf_field() }}

				<h2>Wijzig wachtwoord</h2>

				<label class="col-md-4 control-label" for="newpass">Nieuw wachtwoord</label>
				<input id="newpass" name="password" type="password"  class="textfield textfield--dark" required="">

				<label class="col-md-4 control-label" for="newpass">Nieuw wachtwoord (nogmaals)</label>
				<input id="newpass" name="password2" type="password"  class="textfield textfield--dark" required="">

				<button id="btnsave" name="btnsave" class="button button--dark">Wijzig</button>

		</form>

    </div>

    <div class="view__card">
<!-- set notification -->
			<form class="form-horizontal form-container__item" method="POST" action="/account/updateNotificationSettings" enctype="multipart/form-data">
				{{ csrf_field() }}

					<h2>Notificatie instellingen</h2>


						<label class="col-md-4 control-label" for="checkboxes"></label>
		
								<label for="checkboxes-0" class="checkbox-label">
									<input type="checkbox" {{ $userData['get_notifications_prime'] == 1 ? 'checked' : ''}}  name="get_notifications_prime" value="checkPrime">
									Ontvang Prime silo meldingen
								</label>
	

								<label for="checkboxes-0" class="checkbox-label">
									<input type="checkbox" {{ $userData['get_notifications_waste'] == 1 ? 'checked' : ''}} name="get_notifications_waste" value="checkWaste">
									Ontvang waste silo meldingen
								</label>

	
							<button class="button button--dark">Bewaar notificatie instellingen</button>


			</form>
       
    </div>
		
<div class="view__card">
		
       		<!-- change profile picture -->

			<form class="form-horizontal form-container__item" method="POST" action="/account/updateProfilePicture" enctype="multipart/form-data">
				{{ csrf_field() }}


					<h2>Wijzig profielfoto</h2>

					<div class="avatar--profile-page" style="background-image: url(img/profilePictures/<?php echo Auth()->user()->profile_picture; ?>)"></div>

					<div class="avatar-change-container">
							<label class="col-md-4 control-label" for="newProfilePicture">Profielfoto</label>
							<input id="profilePicture" name="profile_picture" type="file"class="form-control" required="" accept="image/*;capture=camera">
							<button id="btnsave" name="btnsave" class="button button--dark">Wijzig profielfoto</button>
					</div>

			</form>
        </div>
    </div>
@endsection