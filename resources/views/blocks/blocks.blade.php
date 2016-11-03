@extends('layouts/app');

@section('header')

@endsection

<head>
    <title>Blocks</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('blocks') }}">Blocks</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('blocks') }}">View All The Blocks</a></li>
            <li><a href="{{ URL::to('blocks/create') }}">Create a Blocks</a>
        </ul>
    </nav>

@section('content')
    <h1>Blocks</h1>


    @foreach($allBlocktypes as $key => $value)

        <div class="text-center">
        {{ $value->block_type_name }}

            @foreach($allBlock as $block)
                <br> {{ $block->amount }} van {{ $block->blocktype->block_type_name }} met lengte {{ $block->length }}
            @endforeach
    <form class="form-horizontal" method="POST" action="/blocks/addLength">
        {{ csrf_field() }}


                <fieldset>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="length">New Length</label>
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
                    <button id="btnsave" name="btnsave" class="btn btn-primary">Add block length</button>
                </div>
            </div>

        </fieldset>
    </form>

        </div>
    @endforeach



@endsection

@section('footerscripts')

@endsection