@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Naročila</title>
@endsection
@section('Logo') 
Naročila
@endsection

@section('Content')
<div class="container white grey-text text-darken-3" id="mainContainer" style="min-height:42.7em;">
<div class="row" style="height:3em;"></div>
<div class="row">
<div class="col s3.5 offset-s4">
    <form class="" action="{{ route('razvrsti') }}" method="POST" type="hidden" name="_token" value="{{ csrf_token() }}">
        {{ csrf_field() }}
        <select name="razvrsti">
            @if($stanje == 1)
                <option id="dis" value="1" selected="selected">V čakanju</option>
                <option value="2">Sprejeta</option>
                <option value="3">Zavrnjena</option>
            @endif
            @if($stanje == 2)
                <option id="dis" value="1">V čakanju</option>
                <option value="2" selected="selected">Sprejeta</option>
                <option value="3">Zavrnjena</option>
            @endif
            @if($stanje == 3)
                <option id="dis" value="1">V čakanju</option>
                <option value="2">Sprejeta</option>
                <option value="3" selected="selected">Zavrnjena</option>
            @endif
           </select>
        <button class="btn waves-effect waves-light btn-large btnMegaSearch" type="submit" name="action"><i class="material-icons left">sort</i>Razvrsti </button>
    </form>
</div>
</div>
@foreach($narocila as $narocilo)

<div class="row">
        <div class="col s12 l8 offset-l2">
          <div class="card white lighten-4 hoverable" style="border:1px solid #2e7d327c;">
            <div class="card-content grey-text text-darken-3">
              <span class="card-title green-text text-darken-3">{{$narocilo->ime}} {{$narocilo->priimek}}</span>
              
              <div class="row">
                  <div class="col l6 s12">
                    <b>Storitev:</b><p> {{$narocilo->s_naziv}}</p>
                  </div>
                  <div class="col l6 s12">
                    <b>Datum nastanka:</b><p>{{ Carbon\Carbon::parse($narocilo->created_at)->format('d.m.Y') }}</p>
                    </div>
                    
              </div>
            
              
            </div>
            <div class="card-action">
                <div class="row">
                    <div class="col s3 left-align">
                            <b class="red-text">Datum roka:</b><p>{{ Carbon\Carbon::parse($narocilo->datum_konca)->format('d.m.Y') }}</p>
                    </div>
                    <div class="col s3 left-align">
                            <b>Številka naročila:</b><p>{{$narocilo->n_id}}</p>
                    </div>
                    <div class="col s6 right-align">
                            <a href="/narocila/{{$narocilo->n_id}}" class="waves-effect waves-light btn btn-large"><i class="material-icons left">more_vert</i>Podrobnosti</a> 
                    </div>
                </div>
                    
                
            </div>
          </div>
        </div>
</div>        
@endforeach
</div>
@endsection




