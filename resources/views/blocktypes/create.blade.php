<html>
<head>
    <title>Create new BlockType</title>
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


        <h1>Create Blocktype</h1>

        <hr/>

        {!! Form::open(['url' => 'blocktypes']) !!}
        <div class="form-group">
            {!! Form::label('block_type_name', 'Blocktype:') !!}
            {!! Form::text('block_type_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add blocktype', ['class' => 'btn btn-primary form-control']) !!}
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