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
        {!! Form::label('waste_silo_number', 'Silo Number:') !!}
        {!! Form::text('waste_silo_number', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('waste_full_percentage', 'Full percentage:') !!}
        {!! Form::text('waste_full_percentage', 0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('waste_material', 'Materiaal:') !!}
        {!! Form::select('waste_material', $materials ) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add wasteSilo', ['class' => 'btn btn-primary form-control']) !!}
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