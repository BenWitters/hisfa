<html>
<head>
    <title>Edit materialtype</title>
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

    <h1>Edit {!! $materialtypes->material_type_name !!}</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::model($materialtypes, array('route' => array('materialtypes.update', $materialtypes->id)))!!}
    <input type="hidden" name="_method" value="put" />


    <div class="form-group">
        {!! Form::label('material_type_name', 'Materialtype:') !!}
        {!! Form::text('material_type_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('amount', 'Amount:') !!}
        {!! Form::text('amount', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Edit materialtype', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

</div>
</body>
</html>