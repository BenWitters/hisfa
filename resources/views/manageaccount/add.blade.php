@extends('layouts.app')

@section('content')
   <header class="view__sub blocks">
        <div class="wrapper">
            <h1 class="view__sub__title">Account toevoegen</h1>
        </div>
        
        <div class="view__top__overlay"></div>
   </header>
   <div class="wrapper content">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/manageaccounts/create') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Naam</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control textfield textfield--dark" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Adres</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control textfield textfield--dark" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Wachtwoord</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control textfield textfield--dark" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="button button--dark">Account aanmaken</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footerscripts')

@endsection