@extends('layouts.app')

@section('content')
    <header class="view__sub silos" >
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Silo's</span>
            <a class="view__sub__back" href="/silos">BACK</a>
            <h1 class="view__sub__title">Primesilo {!! $primesilo->prime_silo_number !!} | Bewerken</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
   <div class="content wrapper">

        <!-- if there are creation errors, they will show here -->
        {!! HTML::ul($errors->all()) !!}

        {!! Form::model($primesilo, array('route' => array('primesilo.update', $primesilo->id)))!!}
        <input type="hidden" name="_method" value="put" />


        <div class="form-group">
            {!! Form::label('prime_silo_number', 'Primesilo number:') !!}
            {!! Form::text('prime_silo_number', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('prime_full_percentage', 'Primesilo percentage:') !!}
            {!! Form::text('prime_full_percentage', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('prime_material', 'Materiaal:') !!}
            {!! Form::select('prime_material', $materials ) !!}
        </div>

        {!! Form::submit('Edit Primesilo', ['class' => 'btn btn-primary form-control']) !!}

        {!! Form::close() !!}
    </div>
@endsection