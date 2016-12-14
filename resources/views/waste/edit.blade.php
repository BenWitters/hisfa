@extends('layouts.app')

@section('content')
    <header class="view__sub silos" >
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Silo's</span>
            <a class="view__sub__back" href="/silos">BACK</a>
            <h1 class="view__sub__title">Afvalsilo {!! $waste->waste_silo_number !!} | Bewerken</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
   <div class="content wrapper">

        <!-- if there are creation errors, they will show here -->
        {!! HTML::ul($errors->all()) !!}

        {!! Form::model($waste, array('route' => array('waste.update', $waste->id)))!!}
        <input type="hidden" name="_method" value="put" />


        <div class="form-group">
            {!! Form::label('waste_silo_number', 'Nummer') !!}
            {!! Form::text('waste_silo_number', null, ['class' => 'form-control textfield textfield--dark']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('waste_full_percentage', 'Hoeveelheid') !!}
            {!! Form::text('waste_full_percentage', null, ['class' => 'form-control textfield textfield--dark']) !!}
        </div>

        {!! Form::submit('Opslaan', ['class' => 'btn btn-primary form-control button button--dark']) !!}

        {!! Form::close() !!}
    </div>
@endsection