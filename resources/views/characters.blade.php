@extends('layouts.gris')

@section('content')
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">
          Buscar Personaje
        </h1>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    Informacion del Personaje
                  </div>
                  <div class="card-body">
                      <table>
                      	<ul>
                      		<li>nombre</li>
                          <li>level</li>
                      		<li>vocation</li>
                      		<li>sexo</li>
                      	</ul>

                      </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection

