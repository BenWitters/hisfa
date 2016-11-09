<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hisfa</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <div class="signin">
    <div class="signin_overlay"></div>
    <div class="content">
        <h1 class="signin__logo">HISFA</h1>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="E-mail" class="form-control textfield" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="textfield__feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                            <div class="col-md-6">
                                <input id="password" placeholder="Wachtwoord" type="password" class="form-control textfield" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="textfield__feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->
  <button type="submit" class="button">
                                   Inloggen
                                </button>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                              

                                <a class="btn btn-link signin__lostpw" href="{{ url('/password/reset') }}">
                                    Wachtwoord vergeten?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>


