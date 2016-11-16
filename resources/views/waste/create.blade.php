<html>
<head>
    <title>Create new Waste Silo</title>
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


    <h1>Create Waste Silo</h1>

    <hr/>

    {!! Form::open(['url' => 'waste']) !!}
    <div class="form-group">
        {!! Form::label('waste_silo_number', 'Waste Silo number:') !!}
        {!! Form::text('waste_silo_number', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('waste_full_percentage', 'Waste Full Percentage:') !!}
        {!! Form::text('waste_full_percentage', 0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Waste Silo', ['class' => 'btn btn-primary form-control']) !!}
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