@extends('layouts.app')

@section('content')

    <header class="view__sub blocks">
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Grondstoffen</span>
            <a class="view__sub__back" href="/materialtypes">BACK</a>
            <h1 class="view__sub__title">Grondstof {{ $materialtypes->material_type_name }} | Bewerken</h1>

        </div>

        <div class="view__top__overlay"></div>
    </header>

    <div class="content wrapper">
        <!-- if there are creation errors, they will show here -->
        {!! HTML::ul($errors->all()) !!}

    <div class="view__card">
        <h2>Grondstof aanpassen</h2>
        {!! Form::model($materialtypes, array('route' => array('materialtypes.update', $materialtypes->id)))!!}
        <input type="hidden" name="_method" value="put" />


        <div class="form-group">
            {!! Form::label('material_type_name', 'Type') !!}
            {!! Form::text('material_type_name', null, ['class' => 'form-control textfield textfield--dark']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('amount', 'Hoeveelheid') !!}
            {!! Form::text('amount', null, ['class' => 'form-control textfield textfield--dark']) !!}
        </div>


        {!! Form::submit('Wijzig', ['class' => 'button button--dark']) !!}

        {!! Form::close() !!}

    </div>

<div class="view__card">
        <form class="form-horizontal form-container__item" method="POST" action="/materialtypes/{{ $materialtypes->id }}/photo" enctype="multipart/form-data">
        {{ csrf_field() }}
        
            <h2>Foto wijzigen</h2>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="newMaterialPicture">Foto</label>
                <div class="col-md-4">
                    <input id="materialPicture" name="material_type_picture" type="file"class="form-control" required="" accept="image/*;capture=camera">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btnsave"></label>
                <div class="col-md-4">
                    <button id="btnsave" name="btnsave" class="button button--dark">Wijzig</button>
                </div>
            </div>
      

        </form>

        <!-- Delete image -->
        {!! Form::open(array('url' => '/materialtypes/'.$materialtypes->id.'/photo', 'class' => 'form-horizontal form-container__item' )) !!}
        <h2>Foto verwijderen</h2>
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Foto verwijderen', array('class' => 'button button--dark button--danger')) !!}
        {!! Form::close() !!}
      </div>
<!--       <div class="view__card">
        <h2>Verwijder grondstof</h2>
   
        {!! Form::open(array('url' => 'materialtypes/' . $materialtypes->id)) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Grondstof verwijderen', array('class' => 'button button--dark button--danger')) !!}
        {!! Form::close() !!}
      </div> -->
    </div>

@endsection
