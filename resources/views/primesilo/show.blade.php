<html>
<head>
    <title>Create new PrimeSilo</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('primesilo') }}">PrimeSilo</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('primesilo') }}">View All The PrimeSilos</a></li>
            <li><a href="{{ URL::to('primesilo/create') }}">Create a PrimeSilo</a>
        </ul>
    </nav>


    <h1>Showing {{ $primesilo ->prime_silo_number }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $primesilo ->prime_silo_number }}</h2>
    </div>
    <div class="jumbotron text-center">
        <h2>Full percentage</h2>
        <h2>{{ $primesilo ->prime_full_percentage }}</h2>
    </div>





</div>
</body>
</html>