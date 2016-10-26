@extends('layouts/app');

@section('header')

@endsection



@section('content')
    <h1>Blocks</h1>
    @foreach($blocktypes as $key => $value)
        <div class="text-center">
        {{ $value->block_type_name }}

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