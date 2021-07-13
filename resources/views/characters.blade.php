
 @extends('layouts.gris')

@section('content')

  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Buscar Personaje</h1>
        @if($char[0]->id != 1)
       <table cellspacing="1" cellpadding="4" align="center">
          <tbody>
            <tr bgcolor="#505050">
              <td colspan="2">
                <b>Character Information</b>
              </td>
            </tr>
            <tr bgcolor="#D4C0A1">
              <td width="50%">Name:</td>
              <td>{{$char[0]->name}}
                <div style="float: right">
                  <div style="float: right">
                  </div>
                </div>
              </td>
            </tr>
            
            <tr bgcolor="#F1E0C6">
              <td>Sex:</td>
              <td>
                                                      @if($char[0]->sex == 0)
                                                         Mujer
                                                         @else 
                                                         Hombre 
                                                       @endif
              </td>
            </tr>
            <tr bgcolor="#D4C0A1">
              <td>Vocation:</td>
              <td>
                                                      @if($char[0]->vocation == 1)
                                                        Sorcerer
                                                      @else
                                                        @if($char[0]->vocation == 2)
                                                          Druid
                                                        @else
                                                          @if($char[0]->vocation == 3)
                                                            Paladin
                                                          @else
                                                            @if($char[0]->vocation == 4)
                                                              Knight
                                                            @endif
                                                          @endif
                                                        @endif
                                                      @endif
              </td>
            </tr>
            <tr bgcolor="#F1E0C6">
              <td>Level:</td>
              <td>{{$char[0]->level}}</td>
            </tr>
            
            <tr bgcolor="#D4C0A1">
              <td>Residence:</td>
              <td>Thais</td>
            </tr>
            <tr bgcolor="#F1E0C6">
              <td>Created:</td>
              <td>{{$char[0]->created_at}}</td>
            </tr>
            <tr bgcolor="#D4C0A1">
              <td>Account Status:</td>
              <td>Free Account</td>
            </tr>
          </tbody>
        </table>
        <br>
        <br>
        <form method="POST" action="{{ route('fplayer') }}" aria-label="{{ __('Player') }}" >
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

                       <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Buscar') }}
                                </button>
                            </div>
                        </div>                      

                   </form>
          @else
          <form method="POST" action="{{ route('fplayer') }}" aria-label="{{ __('Player') }}" >
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

                       <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Buscar') }}
                                </button>
                            </div>
                        </div>                      

                   </form>
          @endif
      </div>
    </div>
  </header>


@endsection

