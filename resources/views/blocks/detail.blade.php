@extends('layouts.app')

@section('content')

    <header class="view__sub blocks">
        <div class="wrapper">
            <span class="view__sub__breadcrumb">Blokken</span>
            <a class="view__sub__back" href="/blocks">BACK</a>
            <h1 class="view__sub__title">Bloktype: {{$blocktype->block_type_name}}</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <!-- <h1>Blocks</h1> -->
    <div class="content wrapper">
 
    <button class="button button--dark button--addlength">Nieuwe lengte toevoegen</button>
    <div class="blocks">

		 @foreach($allBlock as $block)

   				<div class="blocks__row">
                    <div class="blocks__row__type" >
                        {{ $block["length"] }}m
                    </div>

                    <div class="blocks__row__amount">

                        {{ $block["amount"] }} blokken ({{App\Block::calculateSizePerLength($block["block_type_id"], $block["length"])}} /m&sup3)
                    </div>
                    <form action="/blocks/remove" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="blockId" value="{{$block["block_id"] }}" hidden>
                        <input type="text" name="blocktypeId" value="{{$blocktype->id}}" hidden>
                        <input type="text" name="length" value="{{ $block["length"] }}" hidden>
                        <input type="text" name="amount" value="{{ $block["amount"] }}" hidden>
                        <button class="block__remove">-</button>

                    </form>
                    <form action="/blocks/add" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="blockId" value="{{$block["block_id"] }}" hidden>
                        <input type="text" name="blocktypeId" value="{{$blocktype->id}}" hidden>
                        <input type="text" name="length" value="{{ $block["length"] }}" hidden>
                        <input type="text" name="amount" value="{{ $block["amount"] }}" hidden>

                        <button class="block__add">+</button>

                    </form>
				

                </div>
			 @endforeach

    </div>
    <button class="button button--dark button--addlength">Nieuwe lengte toevoegen</button>

    </div>
@endsection
