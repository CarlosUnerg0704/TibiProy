@extends('layouts.gris')

@section('content')
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">
          Dashboard
        </h1>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    Noticias
                  </div>
                  <div class="card-body">
                    @if (session('status'))
                      <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                      </div>
                    @endif
                      <marquee>
                        <font color="Red" size="3em" style="">
                          <b>-Estaremos informando por este medio TODAS las noticias acerca del Servidor.! (ATENTOS...)
                          </b>
                        </font>
                      </marquee>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
