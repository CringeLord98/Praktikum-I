@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Profil</title>
@endsection
@section('Logo') 
Naročilo
@endsection

@section('Content')
@foreach($narocila as $narocilo) 
<div class="container white grey-text text-darken-3" id="mainContainer" style="min-height:42.7em;">
<div class="row" style="height:5em;"></div>

<div class="row">
        <div class="col s12 l8 offset-l2">
          <div class="card white lighten-4 hoverable" style="border:1px solid #2e7d327c;">
            <div class="card-content grey-text text-darken-3">
              <span class="card-title green-text text-darken-3">{{$narocilo->ime}} {{$narocilo->priimek}}</span>
              <div class="row">
                  <div class="col l4 s12">
                    <b>Email:</b><p> {{$narocilo->email}}</p>
                  </div>
                  <div class="col l4 s12">
                    <b>Telefonska številka:</b><p>{{ $narocilo->telefon}}</p>
                </div>
                <div class="col l4 s12">
                    <b>Okvirna cena:</b><p>{{ $narocilo->okvirna_cena}}€</p>
                </div>
                    
              </div>
              <div class="row">
                    <div class="col l4 s12">
                      <b>Storitev:</b><p> {{$narocilo->s_naziv}}</p>
                    </div>
                    <div class="col l4 s12">
                      <b>Datum začetka:</b><p>{{ Carbon\Carbon::parse($narocilo->datum_zacetka)->format('d.m.Y') }}</p>
                      </div>
                      <div class="col l4 s12">
                        <b class="red-text">Datum roka:</b><p>{{ Carbon\Carbon::parse($narocilo->datum_konca)->format('d.m.Y') }}</p>
                    </div>
                      
                </div>
            
              
            </div>
            <div class="card-action">
                <div class="row">
                    <div class="col s10 offset-s1 left-align">
                         <b>Komentar:</b>   <p>{{$narocilo->komentar}}</p>
                    </div>
                    
                </div>

            </div>
            @if($narocilo->stanje==1)
            
            <div class="card-action">

                                <div class="row">
                                    <div class="col s7 l7 offset-l1">
                                    <form action="{{ route('zavrni', $narocilo->n_id) }}" method="POST" type="hidden" name="_token">{{ csrf_field() }}
                                    <button type="submit" class=" btn btn-large btn-cancle waves-effect waves-light"><i class="material-icons left">delete</i>
                                        Zavrni
                                     </button>
                                    </form>
                                    </div>
                                    <div class="col s3 l3">
                                    <form action="{{ route('odobri', $narocilo->n_id) }}" method="POST" type="hidden" name="_token">{{ csrf_field() }}
                                    <button type="submit" class=" btn btn-large  waves-effect waves-light"><i class="material-icons left">check</i>
                                        Odobri
                                     </button>
                                    </form>
                                    </div>
                                </div>
                                
    
                </div>
                @endif
          </div>
        </div>
</div>
<div style="height:3em;">

    </div>
    @if($narocilo->stanje==2)
    <div class="row container z-depth-1" style="margin:auto; width:40%;color:white; background-color:#2e7d32;"> <div class="col s12">   <h4 class="center-align">Sprejeto</h4>   </div> </div>
            
    @endif
    @if($narocilo->stanje==3)
    <div class="row container z-depth-1" style="margin:auto; width:40%;color:white; background-color:#d32f2f;"> <div class="col s12">   <h4 class="center-align">Zavrnjeno</h4>   </div> </div>
    @endif
            
@endforeach
</div>
@endsection




