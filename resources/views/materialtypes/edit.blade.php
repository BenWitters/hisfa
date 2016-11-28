@extends('layouts.app')

@section('content')

    <header class="view__sub blocks">
        <div class="wrapper">
            <h1 class="view__sub__title">Grondstof {{ $materialtypes->material_type_name }} wijzigen</h1>

            <a href="{{ URL::to('/materialtypes') }}" class="view__sub__button button">Annuleer</a>

        </div>

        <div class="view__top__overlay"></div>
    </header>

    <div class="content wrapper">
        <!-- if there are creation errors, they will show here -->
        {!! HTML::ul($errors->all()) !!}

        {!! Form::model($materialtypes, array('route' => array('materialtypes.update', $materialtypes->id)))!!}
        <input type="hidden" name="_method" value="put" />


        <div class="form-group">
            {!! Form::label('material_type_name', 'Materialtype:') !!}
            {!! Form::text('material_type_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('amount', 'Amount:') !!}
            {!! Form::text('amount', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Aanpassen', ['class' => 'button button--dark']) !!}

        {!! Form::close() !!}


        <!-- delete -->
        {!! Form::open(array('url' => 'materialtypes/' . $materialtypes->id)) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Grondstof verwijderen', array('class' => 'button button--dark')) !!}
        {!! Form::close() !!}
    </div>

@endsection
