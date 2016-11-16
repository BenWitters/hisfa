<html>
<head>
    <title>Materials</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('materials') }}">Materials</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('materials') }}">View All The Materials</a></li>
            <li><a href="{{ URL::to('materials/create') }}">Create a Material</a>
        </ul>
    </nav>

    <h1>All the Materials</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Amount</td>
            <td>Material type id</td>
        </tr>
        </thead>
        <tbody>
        @foreach($materials as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->amount }}</td>
                <td>{{ $value->material_type_id }}</td>


                <td>
                    <!-- show  -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('materials/' . $value->id) }}">Show this Material</a>

                    <!-- edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('materials/' . $value->id . '/edit') }}">Edit this Material</a>

                    <!-- delete -->
                    {{--<a class="btn btn-small btn-danger" href="{{ URL::to('blocktypes/' . $value->id . '/delete') }}">Delete this Blocktype</a>--}}
                    {!! Form::open(array('url' => 'materials/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this Material', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>