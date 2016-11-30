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

    <h1>Add photo for {!! $materialtypes->material_type_name !!}</h1>

    <hr/>

    <form class="form-horizontal form-container__item" method="POST" action="" enctype="multipart/form-data">
        {{ csrf_field() }}

        <fieldset>
            <h2>Add photo</h2>

            <div class="avatar--profile-page" style="background-image: url(img/profilePictures/<?php echo Auth()->user()->profile_picture; ?>)"></div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="newMaterialPicture">Material photo</label>
                <div class="col-md-4">
                    <input id="materialPicture" name="material_type_picture" type="file"class="form-control" required="" accept="image/*;capture=camera">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btnsave"></label>
                <div class="col-md-4">
                    <button id="btnsave" name="btnsave" class="button button--dark">Add material photo</button>
                </div>
            </div>

        </fieldset>
    </form>

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