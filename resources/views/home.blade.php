@extends('layouts.app')

@section('content')

    
        <header class="view__top">
            <h1 class="view__top__title">Dashboard</h1>
            <div class="view__top__overlay"></div>
        </header>
        <div class="wrapper">
            <div class="view__card view__card--graph">
                @foreach($allWaste as $waste)
                    <p>{{$waste->waste_full_percentage}}</p>
                @endforeach

                <div class="grid">
                    <div class="col col--center">
                        <canvas id="myChart" width="200" height="200"></canvas>
                        <!-- <h3>Small</h3>
                        <p>TEST</p> -->
                    </div>
                    <div class="col col--center">
                        <canvas id="myChart2" width="200" height="200"></canvas>
                        <!-- <h3>Medium</h3>
                        <p>TEST</p> -->
                    </div>
                    <div class="col col--center">
                        <canvas id="myChart3" width="200" height="200"></canvas>
                        <!-- <h3>Hard</h3>
                        <p>TEST</p> -->
                    </div>
                </div>
                
            </div>

            <h2 class="view__subtitle">Blokken: stock</h2>
            <div class="view__card">
                
                @foreach($allBlocks as $type)
                    <div class="expand-bar">
                    
                        <div class="col-type-name">{{ $type->block_type_name }}</div>
                        <div class="col-amount">70</div>
                        
                    </div>
                @endforeach

            </div>
        </div>


@endsection
<?php
/*
@foreach($allWaste as $waste)
    <p>Silo {{ $waste->waste_silo_number }} is voor {{ $waste->waste_full_percentage }}% gevuld met {{ $waste->block_type_id }}</p>
@endforeach
*/
?>