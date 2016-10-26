@extends('layouts.app')

@section('content')
   <p>Account settings</p>
   <a href="/manageaccounts/add">Voeg een gebruiker toe</a>

    <div>
        <ul>
   @foreach($users as $user)
       <li><a href="manageaccounts/{{$user->id}}">Account settings voor {{$user->name}}</a></li>
   @endforeach
        </ul>
    </div>
@endsection

@section('footerscripts')

@endsection