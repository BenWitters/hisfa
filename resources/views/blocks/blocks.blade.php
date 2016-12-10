@extends('layouts.app')

@section('content')

    <header class="view__sub blocks">
        <div class="wrapper">
            <h1 class="view__sub__title">Blokken</h1>

            <a href="{{ URL::to('/blocktypes/create') }}" class="view__sub__button button">Bloktype toevoegen</a>
            <a href="{{ URL::to('blocktypes/create') }}" class="view__sub__button button">Bloktype toevoegen</a>

        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <!-- <h1>Blocks</h1> -->
    <div class="content wrapper">
 
        
    <div class="blocks">
        @foreach($allBlocktypes as $key => $value)
        
            <a class="blocks__type" href="blocks/{{ $value->id }}">
                <span class="blocks__type__title">{{ $value->block_type_name }}</span>
                <span class="blocks__type__amount">{{App\Block::calculateSize($value->id)}} /m&sup3</span>
            </a>

        @endforeach
    </div>

    </div>
@endsection
