<html>
<head>
    <title>Showing Blocktype</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('blocktypes') }}">Blocktypes</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('blocktypes') }}">View All The Blocktypes</a></li>
            <li><a href="{{ URL::to('blocktypes/create') }}">Create a Blocktype</a>
        </ul>
    </nav>

    <h1>Showing {{ $blocktypes->block_type_name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $blocktypes->block_type_name }}</h2>
    </div>

</div>
</body>
</html>