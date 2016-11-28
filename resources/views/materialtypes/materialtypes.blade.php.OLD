<head>
    <title>Materialtypes</title>
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

    <h1>All the Materialtypes</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>materialTypes</td>
        </tr>
        </thead>
        <tbody>
        @foreach($materialtypes as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->material_type_name }}</td>


                <td>
                    <!-- show  -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('materialtypes/' . $value->id) }}">Show this Materialtype</a>

                    <!-- edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('materialtypes/' . $value->id . '/edit') }}">Edit this Materialtype</a>
                </td>
                <td>
                    <!-- Octabins -->
                    Octabins: {{ $value->amount }}

                    <!-- Add octabin -->
                    {!! Form::open(array('url' => 'materialtypes/' . $value->id . '/octabin', 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'POST') !!}
                    {!! Form::submit('Add 1', array('class' => 'btn btn-info')) !!}
                    {!! Form::close() !!}

                    <!-- Delete octabin -->
                    {!! Form::open(array('url' => 'materialtypes/' . $value->id . '/octabin', 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete 1', array('class' => 'btn btn-danger')) !!}
                    {!! Form::close() !!}
                </td>
                <td>
                    <!-- delete -->
                    {{--<a class="btn btn-small btn-danger" href="{{ URL::to('blocktypes/' . $value->id . '/delete') }}">Delete this Blocktype</a>--}}
                    {!! Form::open(array('url' => 'materialtypes/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this Materialtype', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>