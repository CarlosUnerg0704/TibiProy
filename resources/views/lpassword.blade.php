@extends('layouts.gris')

@section('content')
<header class="masthead">
    	<div class="container d-flex h-100 align-items-center">
      		<div class="mx-auto text-center">
      			@if($aux != null && $aux != 'Cuenta o Email INVALIDO')
      				<h1 class="mx-auto my-0 ">TU CONTRASEÑA ES: {{	$aux[0]->password }}</h1>
      			@else
      				@if($aux == 'Cuenta o Email INVALIDO')
      					<h1 class="mx-auto my-0 text-uppercase">{{ $aux }}</h1>
      				@else
       					<h1 class="mx-auto my-0 text-uppercase">{{ __('Recuperar Contraseña') }}</h1>
       				@endif
               			<div class="card-body">
                   			<form method="POST" action="{{ route('cpassword') }}" aria-label="{{ __('Recuperar Contraseña') }}">
                       		@csrf
                        		<div class="form-group row">
                            		<label for="name" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('Cuenta') }}</font></label>
									<div class="col-md-4">
                               			<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
											@if ($errors->has('name'))
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $errors->first('name') }}</strong>
			                                    </span>
			                                @endif
                            		</div>
                        		</div>
                        		<div class="form-group row">
                            		<label for="email" class="col-md-4 col-form-label text-md-right"><font color="white">{{ __('E-Mail Address') }}</font></label>
									<div class="col-md-4">
                            			<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
											@if ($errors->has('email'))
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $errors->first('email') }}</strong>
			                                    </span>
			                                @endif
                            		</div>
                        		</div>
								<div class="form-group row mb-0">
                           			<div class="col-md-4 offset-md-4">
                                		<button type="submit" class="btn btn-primary">
                                    		{{ __('Recuperar Contraseña') }}
                                		</button>
                            		</div>
                        		</div>
                    		</form>
    	  				</div>
		
   				@endif
			</div>
    	</div>
	</header>
@endsection