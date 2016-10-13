<html>
<head>
    <title>Blocktypes</title>
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

    <h1>All the Blocktypes</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>BlockType</td>
        </tr>
        </thead>
        <tbody>
        @foreach($blocktypes as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->block_type_name }}</td>


                <td>
                    <!-- show  -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('blocktypes/' . $value->id) }}">Show this Blocktype</a>

                    <!-- edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('blocktypes/' . $value->id . '/edit') }}">Edit this Blocktype</a>

                    <!-- delete -->
                    {{--<a class="btn btn-small btn-danger" href="{{ URL::to('blocktypes/' . $value->id . '/delete') }}">Delete this Blocktype</a>--}}
                    {!! Form::open(array('url' => 'blocktypes/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this Blocktype', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>