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
            <div class="grondstofitem" style="background-image: url(/img/grondstoffen/{{ $value->material_type_picture }})">
                <a href="{{ URL::to('materialtypes/' . $value->id . '/edit') }}" class="grondstofitem__edit"></a>
                    <div class="grondstofitem__overlay"></div>
                    <h2 class="grondstofitem__title">{{ $value->material_type_name }}</h2>
                    <span class="grondstofitem__amount"><span class="grondstofitem__amount__count">{{ $value->amount }}</span> ton</span>
                    
           
                <div class="grondstofitem__action">
                    <!-- Add octabin -->
                    {!! Form::open(array('url' => 'materialtypes/' . $value->id . '/octabin', 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'POST') !!}
                    {!! Form::submit('+1 octabin', array('class' => 'btnOctabin btnOctabin--add button', 'data-id' => $value->id )) !!}
                    {!! Form::close() !!}
                    <!-- Delete octabin -->
                    {!! Form::open(array('url' => 'materialtypes/' . $value->id . '/octabin', 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('-1 octabin', array('class' => 'btnOctabin btnOctabin--delete button', 'data-id' => $value->id )) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        </div>


    </div>

@endsection
