<html>
<head>
    <title>PrimeSilos</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('primesilo') }}">Primesilo</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('primesilo') }}">View All The PrimeSilos</a></li>
            <li><a href="{{ URL::to('primesilo/create') }}">Create a PrimeSilo</a>
        </ul>
    </nav>

    <h1>Edit {!! $primesilo->prime_silo_number !!}</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::model($primesilo, array('route' => array('primesilo.update', $primesilo->id)))!!}
    <input type="hidden" name="_method" value="put" />


    <div class="form-group">
        {!! Form::label('prime_silo_number', 'Primesilo number:') !!}
        {!! Form::text('prime_silo_number', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prime_full_percentage', 'Primesilo percentage:') !!}
        {!! Form::text('prime_full_percentage', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Edit Primesilo', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

</div>
</body>
</html>