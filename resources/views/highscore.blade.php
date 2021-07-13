@extends('layouts.gris')

@section('content')
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">
          highscore
        </h1>
        <table cellspacing="1" cellpadding="4" align="center">
          <tbody>
            <tr bgcolor="#505050">
              <td colspan="4">
                <b>Lista de Jugadores</b>
              </td>
            </tr>
            <tr bgcolor="#D4C0A1">
              <td>#</td>
              <td width="30%">Name:</td>
              <td width="30%"> Level:</td>
              <td> Vocacion:
                <div style="float: right">
                  <div style="float: right">
                  </div>
                </div>
              </td>
            </tr>
             <?php $aux = 0; $cont = 1;?>
            @foreach($players as $player)
            @if($aux == 0)

            <tr bgcolor="#F1E0C6">
            <td>{{$cont}}</td> 
              <td>{{$player->name}}</td>
              <td>{{$player->level}}</td>
              <td>@if($player->vocation == 1)
                                                        Sorcerer
                                                      @else
                                                        @if($player->vocation == 2)
                                                          Druid
                                                        @else
                                                          @if($player->vocation == 3)
                                                            Paladin
                                                          @else
                                                            @if($player->vocation == 4)
                                                              Knight
                                                            @endif
                                                          @endif
                                                        @endif
                                                      @endif
                                                    </td>
            </tr>
            <?php $aux = 1;
                  $cont = $cont + 1 ?>
            @else
            <tr bgcolor="#D4C0A1"> 
              <td>{{$cont}}</td>
              <td>{{$player->name}}</td>
              <td>{{$player->level}}</td>
              <td>@if($player->vocation == 1)
                                                        Sorcerer
                                                      @else
                                                        @if($player->vocation == 2)
                                                          Druid
                                                        @else
                                                          @if($player->vocation == 3)
                                                            Paladin
                                                          @else
                                                            @if($player->vocation == 4)
                                                              Knight
                                                            @endif
                                                          @endif
                                                        @endif
                                                      @endif
                                                    </td>
            </tr>
            <?php $aux = 0; 
                  $cont= $cont + 1?>
            @endif
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </header>
@endsection
