@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Prime Silos</div>

                    <div class="panel-body">
                        @foreach($allWaste as $waste)
                            <p>Silo {{ $waste->waste_silo_number }} is voor {{ $waste->waste_full_percentage }}% gevuld</p>
                        @endforeach
                        <br>
                        <br>
                        @foreach($allPrime as $prime)
                            <p>Silo {{ $prime->prime_silo_number }} is voor {{ $prime->prime_full_percentage }}% gevuld met {{ $prime->material->material_type_name }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
