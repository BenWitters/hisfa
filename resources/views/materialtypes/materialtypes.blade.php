@extends('layouts.app')

@section('content')

    <header class="view__sub blocks">
        <div class="wrapper">
            <h1 class="view__sub__title">Grondstoffen</h1>

            <a href="{{ URL::to('/materialtypes/create') }}" class="view__sub__button button">Grondstof toevoegen</a>

        </div>

        <div class="view__top__overlay"></div>
    </header>

    <div class="content wrapper">
        <div class="wrapper--grondstoffen">

            @foreach($materialtypes as $key => $value)
            <div class="grondstofitem">
                <a class="grondstofitem__header" href="{{ URL::to('materialtypes/' . $value->id . '/edit') }}" style="background-image: url(/img/grondstoffen/{{ $value->material_type_picture }})">
                    <div class="grondstofitem__header__overlay">
                        <h2 class="grondstofitem__title">{{ $value->material_type_name }}</h2>
                        <span class="grondstofitem__amount"><span class="grondstofitem__amount__count">{{ $value->amount }}</span> ton</span>
                    </div>
                       </a>
                <a class="btn btn-small btn-info" href="{{ URL::to('materialtypes/' . $value->id . '/photo') }}">Add photo</a>
                <div class="grondstofitem__action">
                    <!-- Add octabin -->
                    {!! Form::open(array('url' => 'materialtypes/' . $value->id . '/octabin', 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'POST') !!}
                    {!! Form::submit('+1 octabin', array('class' => 'btnOctabin btnoctabin--add button button--dark')) !!}
                    {!! Form::close() !!}
                    <!-- Delete octabin -->
                    {!! Form::open(array('url' => 'materialtypes/' . $value->id . '/octabin', 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('-1 octabin', array('class' => 'btnOctabin btnOctabin--delete button button--dark')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        </div>


    </div>

@endsection
