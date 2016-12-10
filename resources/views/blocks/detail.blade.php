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
                    <form action="/blocks/remove" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="blocktypeId" value="" hidden>
                        <input type="text" name="length" value="" hidden>
                        <input type="text" name="amount" value="" hidden>
                        <button class="block__remove button--block">-</button>

                    </form>

                    <div class="blocks__row__amount">

                        {{ $block["amount"] }} blokken ({{App\Block::calculateSizePerLength($block["block_type_id"], $block["length"])}} /m&sup3)
                    </div>
                    <form action="/blocks/add" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="blocktypeId" value="" hidden>
                        <input type="text" name="length" value="" hidden>
                        <input type="text" name="amount" value="" hidden>

                        <button class="block__add button--block">+</button>

                    </form>


                </div>
			 @endforeach

    </div>

    </div>
@endsection
