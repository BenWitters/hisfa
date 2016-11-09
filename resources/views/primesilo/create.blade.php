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


    <h1>Create PrimeSilo</h1>

    <hr/>

    {!! Form::open(['url' => 'primesilo']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('prime_silo_number', 'Silo Number:') !!}
        {!! Form::text('prime_silo_number', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prime_full_percentage', 'Full percentage:') !!}
        {!! Form::text('prime_full_percentage', 0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add PrimeSilo', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif





    @section('footerscripts')

    @endsection



</div>
</body>
</html>