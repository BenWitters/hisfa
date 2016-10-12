@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Waste Silos</div>

                    <div class="panel-body">
                        @foreach($wasteData as $wasteSilo)
                            <p>Silo {{ $wasteSilo->waste_silo_number }} is voor {{ $wasteSilo->waste_full_percentage }}% gevuld met {{ $wasteSilo->blocktype->block_type_name }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
