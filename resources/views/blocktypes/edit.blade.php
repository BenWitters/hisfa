<html>
<head>
    <title>Edit blocktype</title>
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

    <h1>Edit {!! $blocktypes->block_type_name !!}</h1>

    <!-- if there are creation errors, they will show here -->
    {!! HTML::ul($errors->all()) !!}

    {!! Form::model($blocktypes, array('route' => array('blocktypes.update', $blocktypes->id)))!!}
    <input type="hidden" name="_method" value="put" />


    <div class="form-group">
        {!! Form::label('block_type_name', 'Blocktype:') !!}
        {!! Form::text('block_type_name', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Edit blocktype', ['class' => 'btn btn-primary form-control']) !!}

    {!! Form::close() !!}

</div>
</body>
</html>