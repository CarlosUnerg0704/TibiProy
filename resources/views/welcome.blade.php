@extends('layouts.gris')

@section('content')

  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Server PTY</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">ENTRA..! Juega y Diviertete GRATIS..!</h2>
        <a href="{{route('register')}}" class="btn btn-primary js-scroll-trigger">CREAR CUENTA</a>
      </div>
    </div>
  </header>

@endsection