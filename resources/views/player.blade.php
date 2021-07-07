@extends('layouts.gris')

@section('content')
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Crear Personaje</h1>
        <form method="POST" action="{{ route('rplayer') }}" aria-label="{{ __('Player') }}" >
                        @csrf
                       <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right"><font color="white">{{ __('Name') }}</font></label>
                            
                                <input pattern="[a-z A-Z]+" id="name" type="text" class="col-md-4 col-form-label text-md-left form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                       <div class="form-group row">
                       <label for="sex" class="col-sm-4 col-form-label text-md-right"><font color="white">{{ __('Sexo') }}</font></label>
                       
                       <select class="col-md-4 col-form-label text-md-right form-control" name="sex">
                           <option value="1">Masculino</option>
                           <option value="0">Femenino</option>
                       </select>
                        @if ($errors->has('sex'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
                       </div>
                      
                       <div class="form-group row">
                       <label for="city" class="col-sm-4 col-form-label text-md-right"><font color="white">{{ __('Ciudad') }}</font></label>
                       <select class="col-md-4 col-form-label text-md-right form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city">
                           <option value="1">thais</option>
                           <option value="0">carlin</option>
                       </select>
                        @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                       </div>

                        <div class="form-group row">
                       <label for="vocation" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('Vocación') }}</font></label>
                       <select class="col-md-4 col-form-label text-md-right form-control{{ $errors->has('vocation') ? ' is-invalid' : '' }}" name="vocation">
                           <option value="1">Sorcerer</option>
                           <option value="2">Druid</option>
                           <option value="3">Paladin</option>
                           <option value="4">Knight</option>
                       </select>
                        @if ($errors->has('vocation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('vocation') }}</strong>
                                    </span>
                                @endif
                       </div>

                       <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>                      

                   </form>
      </div>
    </div>
  </header>


@endsection
