<html>
<head>
    <title>Waste silo</title>
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

    <h1>All the Waste Silos</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Waste Silo</td>
        </tr>
        </thead>
        <tbody>
        @foreach($waste as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->waste_silo_number }}</td>


                <td>
                    <!-- show  -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('waste/' . $value->id) }}">Show this Waste Silo</a>

                    <!-- edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('waste/' . $value->id . '/edit') }}">Edit this Waste Silo</a>

                    <!-- delete -->
                    {{--<a class="btn btn-small btn-danger" href="{{ URL::to('blocktypes/' . $value->id . '/delete') }}">Delete this Blocktype</a>--}}
                    {!! Form::open(array('url' => 'waste/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this Waste Silo', array('class' => 'btn btn-warning')) !!}
                    {!! Form::close() !!}


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>





{{--@foreach($wasteData as $wasteSilo)--}}
{{--<p>Silo {{ $wasteSilo->waste_silo_number }} is voor {{ $wasteSilo->waste_full_percentage }}% gevuld met {{ $wasteSilo->blocktype->block_type_name }}</p>--}}
{{--@endforeach--}}
