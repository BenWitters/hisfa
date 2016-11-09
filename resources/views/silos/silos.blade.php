@extends('layouts.app')

@section('content')
    <header class="view__sub silos">
        <div class="wrapper">
            <h1 class="view__sub__title">Silo's</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <div class="content wrapper silos-content">
        <h2>Primesilo's</h2>
        <div class="grid silos-grid">
            
            @foreach($allPrime as $key => $value)
                <div class="col">
                    <div class="wrapper">
                        <p class="silos-grid__col__id">Silo {{ $value->prime_silo_number  }}</p>
                        <p class="silos-grid__col__percentage">{{ $value->prime_full_percentage}}%</p>
                    </div>
                    @if($value->prime_full_percentage >= 80)
                    <div class="silos-grid__col__alert">!</div>
                    @endif
                    <div class="silos-grid__col__fill" style="height: {{ $value->prime_full_percentage}}%"></div>
                </div>
                
    
            @endforeach

        </div>
        <a href="{{ URL::to('primesilo/create') }}" class="button button--dark">Primesilo toevoegen</a>

        <h2>Afvalsilo's</h2>
        <div class="grid silos-grid">
            
            @foreach($allWaste as $key => $value)
                <div class="col">
                    <div class="wrapper">
                        <p class="silos-grid__col__id">Silo {{ $value->waste_silo_number  }}</p>
                        <p class="silos-grid__col__percentage">{{ $value->waste_full_percentage}}%</p>
                    </div>
                    @if($value->waste_full_percentage >= 80)
                    <div class="silos-grid__col__alert">!</div>
                    @endif
                    <div class="silos-grid__col__fill" style="height: {{ $value->waste_full_percentage}}%"></div>
                </div>
                
    
            @endforeach

        </div>
        <a href="{{ URL::to('waste/create') }}" class="button button--dark">Afvalsilo toevoegen</a>

    </div>
@endsection
