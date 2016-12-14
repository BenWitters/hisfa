@extends('layouts.app')

@section('content')
    <header class="view__sub silos" >
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Silo's</span>
            <a class="view__sub__back" href="/silos">BACK</a>
            <h1 class="view__sub__title">Afvalsilo toevoegen</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
   <div class="content wrapper">

    {!! Form::open(['url' => 'waste']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('waste_silo_number', 'Nummer') !!}
        {!! Form::text('waste_silo_number', null, ['class' => 'form-control textfield textfield--dark']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('waste_full_percentage', 'Inhoud (%)') !!}
        {!! Form::text('waste_full_percentage', 0, ['class' => 'form-control textfield textfield--dark']) !!}
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