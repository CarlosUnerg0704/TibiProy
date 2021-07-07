@extends('layouts.gris')

@section('content')
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Login</h1>
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                       @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right"><font color="white">{{ __('E-Mail Address') }}</font></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('Password') }}</font></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       <font color="white"> {{ __('Remember Me') }}</font>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="offset-md-4 btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                
                                <a class="btn btn-link" href="{{ route('lpassword') }}">
                                    {{ __('RECUPERAR CONTRASEÑA') }}
                                </a>

                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </header>


@endsection
