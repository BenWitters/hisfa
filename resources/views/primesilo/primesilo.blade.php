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

    <h1>All the PrimeSilos</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Silo number</td>
            <td>Full percentage</td>
            <td>Material id</td>
        </tr>
        </thead>
        <tbody>
        @foreach($primesilo as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->prime_silo_number }}</td>
                <td>{{ $value->prime_full_percentage }}</td>
                <td>{{ $value->material_id }}</td>


                <td>
                    <!-- show  -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('primesilo/' . $value->id) }}">Show this Silo</a>

                    <!-- edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('primesilo/' . $value->id . '/edit') }}">Edit this Silo</a>

                    <!-- delete -->
                    {{--<a class="btn btn-small btn-danger" href="{{ URL::to('blocktypes/' . $value->id . '/delete') }}">Delete this Blocktype</a>--}}
                    {!! Form::open(array('url' => 'primesilo/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this PrimeSilo', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>