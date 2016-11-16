@extends('layouts.app')

@section('content')

        
        <header class="view__top">
            <h1 class="view__top__title">Hallo, <?php echo Auth()->user()->name; ?></h1>
            <div class="view__top__overlay"></div>
        </header>
        <div class="wrapper">
            <div class="view__card view__card--graph">
        

               <!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach($allWaste as $value)
            <div class="swiper-slide">
                <div class="silo">
                    <div class="wrapper">
                        <p class="silos-grid__col__id">AFVAL | Silo {{ $value->waste_silo_number  }}</p>
                        <p class="silos-grid__col__percentage">{{ $value->waste_full_percentage}}%</p>
                    </div>
                    @if($value->waste_full_percentage >= 80)
                    <div class="silos-grid__col__alert">!</div>
                    @endif
                    <div class="silos-grid__col__fill" style="height: {{ $value->waste_full_percentage}}%"></div>
                </div>
            </div>
        @endforeach
        @foreach($allPrime as $value)
            <div class="swiper-slide">
                <div class="silo">
                    <div class="wrapper">
                        <p class="silos-grid__col__id">PRIME | Silo {{ $value->prime_silo_number  }}</p>
                        <p class="silos-grid__col__percentage">{{ $value->prime_full_percentage}}%</p>
                    </div>
                    @if($value->prime_full_percentage >= 80)
                    <div class="silos-grid__col__alert">!</div>
                    @endif
                    <div class="silos-grid__col__fill" style="height: {{ $value->prime_full_percentage}}%"></div>
                </div>
            </div>
        @endforeach
        
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    
</div>
                
            </div>

            <h2 class="view__subtitle">Blokken: stock</h2>
            <div class="view__card">
                
                @foreach($allBlocks as $type)
                    <div class="expand-bar">
                    
                        <div class="col-type-name">{{ $type->block_type_name }}</div>
                        <div class="col-amount">{{App\Block::countBlocks($type->id)}}</div>
                    </div>
                @endforeach

            </div>
        </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.js"></script>
    <script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 3,
    
    // If we need pagination
    pagination: '.swiper-pagination',
    
    // Navigation arrows
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    breakpoints: {
        768: {
          slidesPerView: 1,
        }
    }
  })     
    </script>
@endsection

