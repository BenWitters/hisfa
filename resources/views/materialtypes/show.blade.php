<html>
<head>
    <title>Showing Materialtype</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('materialtypes') }}">Materialtypes</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('materialtypes') }}">View All The Materialtypes</a></li>
            <li><a href="{{ URL::to('materialtypes/create') }}">Create a Materialtype</a>
        </ul>
    </nav>

    <h1>Showing {{ $materialtypes->material_type_name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $materialtypes->material_type_name }}</h2>
    </div>

    <div class="jumbotron text-center">
        <h2>{{ $materialtypes->amount }}</h2>
    </div>

</div>
</body>
</html>