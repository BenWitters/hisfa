@extends('layouts.app')

@section('content')

<div class="container">


    <h1>Edit {!! $primesilo->prime_silo_number !!}</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::model($primesilo, array('route' => array('primesilo.update', $primesilo->id)))!!}
    <input type="hidden" name="_method" value="put" />

    <div class="form-group">
        {!! Form::label('prime_silo_number', 'Primesilo number:') !!}
        {!! Form::text('prime_silo_number', null, ['class' => 'textfield textfield--dark']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prime_full_percentage', 'Primesilo percentage:') !!}
        {!! Form::text('prime_full_percentage', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prime_material_id', 'Primesilo material:') !!}
        {!! Form::select('prime_material_id', $materials) !!}
    </div>

    {!! Form::submit('Edit Primesilo', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

</div>
@endsection