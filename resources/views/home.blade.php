@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@foreach($allWaste as $waste)
    <p>Silo {{ $waste->waste_silo_number }} is voor {{ $waste->waste_full_percentage }}% gevuld met {{ $waste->block_type_id }}</p>
@endforeach