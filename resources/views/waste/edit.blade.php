<html>
<head>
    <title>Edit waste silo</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('waste') }}">Waste Silo</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('waste') }}">View All The Waste Silo</a></li>
            <li><a href="{{ URL::to('waste/create') }}">Create a Waste Silo</a>
        </ul>
    </nav>

    <h1>Edit {!! $waste->waste_silo_number !!}</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::model($waste, array('route' => array('waste.update', $waste->id)))!!}
    <input type="hidden" name="_method" value="put" />


    <div class="form-group">
        {!! Form::label('waste_silo_number', 'Waste Silo:') !!}
        {!! Form::text('waste_silo_number', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Edit Waste Silo', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

</div>
</body>
</html>