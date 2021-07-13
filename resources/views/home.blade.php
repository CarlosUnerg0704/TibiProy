@extends('layouts.gris')

@section('content')
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">
          Account Manager
        </h1>
        <table  cellspacing="1" cellpadding="4" class="col-md-7" align="center">
          <tbody>
            <tr>
              <td colspan="3"><font color="RED" size="50px" ><b>NEWS</font></b></td>
            </tr>
            <tr>
              <td colspan="3">
                <marquee>
                  <font color="Red" size="3em" style="">
                    <b>-Estaremos informando por este medio TODAS las noticias acerca del Servidor.! (ATENTOS...)</b>
                  </font>
                </marquee>
              </td>
            </tr>
            <tr bgcolor="#505050">
              <td colspan="3"><b>Characters</b></td>
            </tr>
            <tr bgcolor="#D4C0A1">
              <td width="30%">Name:</td>
              <td width="30%"> Level:</td>
              <td> Vocacion:
                <div style="float: right">
                  <div style="float: right">
                  </div>
                </div>
              </td>
            </tr>
            <?php $aux = 0; ?>
            @foreach($chars as $char)
            @if($aux == 0)
            <tr >
              <td bgcolor="#F1E0C6">{{$char->name}}</td>
              <td bgcolor="#F1E0C6">{{$char->level}}</td>
              <td bgcolor="#F1E0C6">{{$char->vocation}}</td>
              <td ><a href="#" ><font color="white" size="4px">Eliminar</font></a></td> 
            </tr>
            <?php $aux = 1; ?>
            @else
            <tr >
              <td bgcolor="#D4C0A1">{{$char->name}}</td>
              <td bgcolor="#D4C0A1">{{$char->level}}</td>
              <td bgcolor="#D4C0A1">{{$char->vocation}}</td>
              <td ><a href="#" ><font color="white" size="4px">Eliminar</font></a></td> 
            </tr>
            <?php $aux = 0; ?>
            @endif
            @endforeach
         
          </tbody>
        </table>
      </div>
    </div>
  </header>
@endsection
