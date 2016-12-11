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
 
    <div class="blocks">
	
		 @foreach($allBlock as $block)

   				<div class="blocks__row">
                    <div class="blocks__row__type" >
                        {{ $block["length"] }}m
                    </div>

                    <div class="blocks__row__amount">
						@if( $block["amount"] == 1)
							{{ $block["amount"] }} blok ({{App\Block::calculateSizePerLength($block["block_type_id"], $block["length"])}} /m&sup3)
						@else
							{{ $block["amount"] }} blokken ({{App\Block::calculateSizePerLength($block["block_type_id"], $block["length"])}} /m&sup3)
						@endif
                        
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
	<h2>Nieuwe lengte toevoegen</h2>
    	<form action="/blocks/addLength" method="post" class="blocks__row add-length">
    		 {{ csrf_field() }}
	    	<div class="blocks__row__type" >
	        	<input type="text" name="length">
	        	<input value="{{ $blocktype->id }}" id="blockTypeId" name="blockTypeId" type="hidden" class="form-control input-md" required="">
	        </div>

	        <div class="blocks__row__amount"></div>
	        <button class="block__save">Opslaan</button>
        </form>

	
    </div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>

    	$(".button--addlength").click(function(){
    		$(".add-length").toggle();
    	});

    </script>
@endsection
