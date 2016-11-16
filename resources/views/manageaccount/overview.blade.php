@extends('layouts.app')

@section('content')
    <header class="view__sub">
	    <div class="wrapper">
	    	<h1 class="view__sub__title">Gebruikers</h1>
	    	<a href="/manageaccounts/add" class="view__sub__button button">Gebruiker toevoegen</a>
	    </div>
        
        <div class="view__top__overlay"></div>
   </header>
 <!--   <div class="view_card">
   	 
   </div> -->

    <div class="wrapper content users">
    	
   
	<table>
		<tr>
			<th>Naam</th>
			<th>E-mail</th>
			<th>Admin</th>
			<th></th>
		</tr>

		@foreach($users as $user)
	       	<tr>

	       		<td>
	       			{{$user->name}}
	       		</td>
	       		<td>
	       			{{$user->email}}
	       		</td>
	       		<td>
	       			{{$user->is_admin}}
	       		</td>
	       		<td><a href="manageaccounts/{{$user->id}}">Bewerken</a></td>
				
			</tr>
	   @endforeach
	
	</table>

	 </div>
	

  

@endsection

@section('footerscripts')

@endsection