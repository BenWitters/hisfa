<html>
<head>
    <title>Showing Waste Silo</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('waste') }}">Waste</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('waste') }}">View All The Waste Silos</a></li>
            <li><a href="{{ URL::to('waste/create') }}">Create a Waste Silo</a>
        </ul>
    </nav>

    <h1>Showing {{ $waste->waste_silo_number }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $waste->waste_silo_number }}</h2>
    </div>

</div>
</body>
</html>