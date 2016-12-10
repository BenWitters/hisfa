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
        {!! Form::label('prime_silo_number', 'Silo Number:') !!}
        {!! Form::text('prime_silo_number', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prime_full_percentage', 'Full percentage:') !!}
        {!! Form::text('prime_full_percentage', 0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prime_material', 'Materiaal:') !!}
        {!! Form::select('prime_material', $materials ) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add PrimeSilo', ['class' => 'btn btn-primary form-control']) !!}
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