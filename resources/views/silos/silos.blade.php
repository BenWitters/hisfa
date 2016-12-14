@extends('layouts.app')

@section('content')
    <header class="view__sub silos" xmlns:v-bind="http://www.w3.org/1999/xhtml">
        <div class="wrapper">
            <h1 class="view__sub__title">Silo's</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
    <div class="content wrapper silos-content" id="app">

        @if(Auth::user()->can_view_prime == 1)
        <h2>Primesilo's</h2>
        <div class="grid silos-grid">
            
                <a v-bind:href="'primesilo/' + prime.id + '/edit'" class="col" v-for="prime in primes">
                    <div class="wrapper">
                        <p class="silos-grid__col__id">Silo @{{ prime.prime_silo_number  }}</p>
                        <p class="silos-grid__col__percentage">@{{ prime.prime_full_percentage}}%</p>
                        <p class="silos-grid__col__id">@{{ prime.material.material_type_name }}</p>
                    </div>
                    <div class="silos-grid__col__alert" v-if="prime.prime_full_percentage >= 90">!</div>
                    <div class="silos-grid__col__fill" v-bind:style="{height: prime.prime_full_percentage + '%'}"></div>

                </a>


        </div>

        <a href="{{ URL::to('primesilo/create') }}" class="button button--dark">Primesilo toevoegen</a>

        @endif

        @if(Auth::user()->can_view_waste == 1)
        <h2>Afvalsilo's</h2>
        <div class="grid silos-grid">
            
                <a v-bind:href="'waste/' + waste.id + '/edit'" class="col" v-for="waste in wastes">
                    <div class="wrapper">
                        <p class="silos-grid__col__id">Silo @{{ waste.waste_silo_number  }}</p>
                        <p class="silos-grid__col__percentage">@{{ waste.waste_full_percentage}}%</p>
                    </div>
                    <div class="silos-grid__col__alert" v-if="waste.waste_full_percentage >= 90">!</div>
                    <div class="silos-grid__col__fill" v-bind:style="{height: waste.waste_full_percentage + '%'}"></div>
                </a>
                
    

        </div>
        <a href="{{ URL::to('waste/create') }}" class="button button--dark">Afvalsilo toevoegen</a>
        @endif
</div>
    <script src="https://unpkg.com/vue@2.0.5/dist/vue.min.js"></script>
    <script src="https://unpkg.com/vue-resource@1.0.3/dist/vue-resource.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                primes: null,
                wastes: null

            },
            created: function(){
                // als de view gecreeerd wordt fetch data
                this.fetchPrimes();
                this.fetchWastes();
            },
            methods: {
                fetchPrimes: function(){
                    // ajax call naar api promise ipv callback
                    this.$http.get('/api/v1/primesilos').then((response) => {
                        // success callback
                        // primes gelijk stellen aan de body van de ajax call -> data
                        console.log(response.body);
                        this.primes = response.body;

                }, (response) => {
                        // error callback
                        console.log("not");
                    });
                },
                fetchWastes: function(){
                    // ajax call naar api promise ipv callback
                    this.$http.get('/api/v1/wastesilos').then((response) => {
                        // success callback
                        // wastes gelijk stellen aan de body van de ajax call -> data
                        this.wastes = response.body;
                }, (response) => {
                        // error callback
                        console.log("not");
                    });
                }
            }
        })
    </script>
@endsection
