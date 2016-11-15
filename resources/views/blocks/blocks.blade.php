@extends('layouts.app')

@section('content')

    <header class="view__sub blocks">
        <div class="wrapper">
            <h1 class="view__sub__title">Blokken</h1>
            <a href="{{ URL::to('/blocktypes/create') }}" class="view__sub__button button">Bloktype toevoegen</a>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <!-- <h1>Blocks</h1> -->
    <div class="content wrapper">
 
        
    
    @foreach($allBlocktypes as $key => $value)
    <div class="blocks">
    <div class="blocks__type">

        {{ $value->block_type_name }}
        <div class="blocks__type__add">
            +
        </div>
    </div>

        
    
            @foreach($allBlock as $block)
                <form action="/blocks/add" method="post">
                {{ csrf_field() }}
                    <input type="text" name="blocktypeId" value="{{$block->blocktype->id}}">
                    <input type="text" name="length" value="{{$block->length}}">
                    <input type="text" name="amount" value="{{$block->amount}}">
                    <input type="submit" value="Toevoegen">
                </form>
                <br> {{ $block->amount }} van {{ $block->blocktype->block_type_name }} met lengte {{ $block->length }}
            @endforeach
    <form class="form-horizontal" method="POST" action="/blocks/addLength">
        {{ csrf_field() }}


                <div class="blocks__add">
                    <h2>Nieuwe lengte toevoegen</h2>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="length">Lengte: </label>
                        <div class="col-md-4">
                            <input id="length" name="length" type="text" placeholder="Block Length" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="blockTypeId"></label>
                        <div class="col-md-4">
                            <input value="{{ $value->id }}" id="blockTypeId" name="blockTypeId" type="hidden" class="form-control input-md" required="">

                </div>

            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="btnsave"></label>
                <div class="col-md-4">
                    <button id="btnsave" name="btnsave" class="blocks__button button">Toevoegen</button>
                </div>
            </div>

        </div>

    </form>
    </div>

    @endforeach


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    $(".blocks__type__add").click(function(){
        $(this).parent().parent().find(".blocks__add").toggle();
    });
    </script>

@endsection
