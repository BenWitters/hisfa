@extends('layouts.app')

@section('content')

    <header class="view__sub blocks">
        <div class="wrapper">
            <h1 class="view__sub__title">Grondstof toevoegen</h1>

            <a href="{{ URL::to('/materialtypes') }}" class="view__sub__button button">Annuleer</a>

        </div>

        <div class="view__top__overlay"></div>
    </header>

    <div class="content wrapper">
        {!! Form::open(['url' => 'materialtypes']) !!}
        <div class="form-group">
            {!! Form::label('material_type_name', 'Materialtype:') !!}
            {!! Form::text('material_type_name', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::file('material_type_picture') !!}

        <div class="form-group">
            {!! Form::label('amount', 'Amount:') !!}
            {!! Form::text('amount', 0, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Grondstof toevoegen', ['class' => 'button button--dark']) !!}
        </div>


        {!! Form::close() !!}

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </div>

@endsection
