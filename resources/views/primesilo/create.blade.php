@extends('layouts.app')

@section('content')
    <header class="view__sub silos" >
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Silo's</span>
            <a class="view__sub__back" href="/silos">BACK</a>
            <h1 class="view__sub__title">Primesilo toevoegen</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
   <div class="content wrapper">

    {!! Form::open(['url' => 'primesilo']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('prime_silo_number', 'Nummer') !!}
        {!! Form::text('prime_silo_number', null, ['class' => 'form-control textfield textfield--dark']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prime_full_percentage', 'Inhoud (%)') !!}
        {!! Form::text('prime_full_percentage', 0, ['class' => 'form-control textfield textfield--dark']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('material_id', 'Materiaal:') !!}
        {!! Form::select('material_id', $materials , 0, ['class' => 'selectbox']) !!}
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

    </div>
@endsection