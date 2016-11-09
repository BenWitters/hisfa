@extends('layouts.app')

@section('content')
    <header class="view__sub silos">
        <div class="wrapper">
            <h1 class="view__sub__title">Silo's</h1>
            <!-- <a href="{{ URL::to('blocks/create') }}" class="view__sub__button button">Bloktype toevoegen</a> -->
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <div class="content wrapper">
    
        @foreach($blocktypes as $key => $value)

        

        @endforeach

    </div>
@endsection
