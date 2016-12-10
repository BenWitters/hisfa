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
 
        
    
    @foreach($allBlocktypes as $key => $value)
    <div class="blocks">
    <div class="blocks__type">
        {{ $value->block_type_name }} |
        {{App\Block::countBlocks($value->id)}} blokken ({{App\Block::calculateSize($value->id)}} /m&sup3)
        <div class="blocks__type__add">
            +
        </div>
    </div>


        @foreach($allBlock as $block)

            @if ($block->blocktype->id == $value->id)
                <div class="blocks__row">
                    <div class="blocks__row__type" >
                        {{ $block->length }}m
                    </div>
                    <form action="/blocks/remove" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="blocktypeId" value="{{$block->blocktype->id}}" hidden>
                        <input type="text" name="length" value="{{$block->length}}" hidden>
                        <input type="text" name="amount" value="{{$block->amount}}" hidden>
                        <button class="block__remove button--block" data-id="{{ $block->block_id }}">-</button>

                    </form>

                    <div class="blocks__row__amount">
                        <span class="blocks__row__amount__count">{{ $block->amount }}</span> blokken ({{App\Block::calculateSizePerLength($block->block_type_id, $block->length)}} /m&sup3)
                    </div>
                    <form action="/blocks/add" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="blocktypeId" value="{{$block->blocktype->id}}" hidden>
                        <input type="text" name="length" value="{{$block->length}}" hidden>
                        <input type="text" name="amount" value="{{$block->amount}}" hidden>

                        <button class="block__add button--block" data-id="{{ $block->block_id }}">+</button>

                    </form>


                </div>
            @endif
        @endforeach


    <form class="form-horizontal" method="POST" action="/blocks/addLength">
        {{ csrf_field() }}


                <div class="blocks__add">
                    <div class="blocks__type-grey">
                        Lengte toevoegen

                            <input id="length" name="length" type="text" pattern="[0-9]+([\.][0-9]+)?" title="Vul hier enkel cijfers in, bij het invoeren van kommagetallen, maak gebruik van een . om cijfers te scheiden."  placeholder="Block Length" class="form-control input-md" required="">
                            <input value="{{ $value->id }}" id="blockTypeId" name="blockTypeId" type="hidden" class="form-control input-md" required="">

                            <button id="btnsave" name="btnsave" class="blocks__button-add button">Toevoegen</button>

                    </div>

        </div>

    </form>
    </div>

    @endforeach


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        var counter = 0;

        $(".blocks__type__add").click(function(){

        $(this).parent().parent().find(".blocks__add").toggle();
            $(this).parent().parent().find(".blocks__row").attr('style', 'display: -webkit-flex; display: flex');

        });
    </script>
@endsection
