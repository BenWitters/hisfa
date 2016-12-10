@extends('layouts.app')

@section('content')

 <header class="view__sub blocks">
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Blokken</span>
            <a class="view__sub__back" href="/blocks">BACK</a>
            <h1 class="view__sub__title">Bloktype toevoegen</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <!-- <h1>Blocks</h1> -->
    <div class="content wrapper">
        {!! Form::open(['url' => 'blocktypes']) !!}
        <div class="form-group">
            <p>{!! Form::label('block_type_name', 'Nieuw blocktype:') !!}</p>
            {!! Form::text('block_type_name', null, ['class' => 'form-control textfield textfield--dark', 'autofocus']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Toevoegen', ['class' => 'button button--dark form-control']) !!}
        </div>

        {!! Form::close() !!}

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

@endsection

