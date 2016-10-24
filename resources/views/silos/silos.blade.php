@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Prime Silos</div>

                    <div class="panel-body">
                        @foreach($primesilosData as $primeSilo)
                            <div>
                                <p>Silo {{ $primeSilo->prime_silo_number }} is voor {{ $primeSilo->prime_full_percentage }}% gevuld met {{ $primeSilo->material->materialtype->material_type_name }}</p>
                                <form method="POST" action="/silos/{{ $primeSilo->id }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Delete">
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
