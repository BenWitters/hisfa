<html>
<head>
    <title>Create new MaterialType</title>
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


    <h1>Create Materialtype</h1>

    <hr/>

    {!! Form::open(['url' => 'materialtypes']) !!}
    <div class="form-group">
        {!! Form::label('material_type_name', 'Materialtype:') !!}
        {!! Form::text('material_type_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        {!! Form::text('amount', 0, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add materialtype', ['class' => 'btn btn-primary form-control']) !!}
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