@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Profil</title>
@endsection
@section('Logo') 
{{ Auth::user()->name }}
@endsection

@section('Content')
<div class="container white" id="mainContainer" style="min-height:42.7em;">
    <!--
<div class="row" style="height:1em;"></div>
<div class="grey lighten-4 z-depth-2" style="padding:0.5em;width:80%;margin:auto;">
    <div class="row">
        <div class="col s4">
            <div style="margin:3em;">
                <div class="Pimg" >
                    <img class="Pimg"src="storage/cover_images/{{$user->slika}}" style="border:2px solid #2e7d32;">
                </div>
            </div>
        </div>
        <div class="col s8">
                <div class="row" style="height:1em;">
                </div>
                    <div class="row">
                        <div class="col s6">
                            <h5 class="green-text text-darken-2">Ime:</h5>
                            <h5>{{ Auth::user()->name }}</h5>
                        </div>
                        <div class=" col s6">
                                <h5 class="green-text text-darken-2">Priimek:</h5>
                                <h5>{{ Auth::user()->surname }}</h5>
                            </div>
                    </div>
                    
                    <div class="row">
                           <civ class="row"></civ>
                            <div class="col s6">
                                <h5 class="green-text text-darken-2">Davčna številka:</h5>
                                <h5>{{ Auth::user()->davcna }}</h5>
                            </div>
                            <div class=" col s6">
                                </div>
                        </div>
                    <div class="row">
                            
                    </div>
            </div>  
        </div>
        <div class="divider">
            
        </div>
        <div class="row">
                <div class="col s12 ">
                        <div class="row" style="height:1em;">
                        </div>
                            <div class="row">
                                <div class="col s10 offset-s1">
                                    <h5 class="green-text text-darken-2">Opis:</h5>
                                    <p>{{ Auth::user()->opis }}</p>
                                   </div>
                               
                            </div>
                    </div>  
                </div>
        <div class="divider">

        </div>
        <div class="row">
                <div class="col s12">
                        <div class="row" style="height:1em;"></div>
                                <div class="row">
                                    <div class="col s10 offset-s1">
                                            <div class="input-field col s4">
                                                    <h5 class="green-text text-darken-2">Email:</h5>
                                                    <p>{{ Auth::user()->email }}</p>
                                            </div>
                                            <div class="input-field col s4">
                                                    <h5 class="green-text text-darken-2">Telefon:</h5>
                                                    <p>{{ Auth::user()->telefon }}</p>
                                                </div>
                                                <div class="col s2">
                                                        <a href="{{ url('/profileSettings') }}" class="waves-effect waves-light btn btn-large">Spremeni račun</a>    
                                                 </div>
                                                 <div class="col s2">
                                                        <form action="{{ route('u_destroy')}}" method="POST" type="hidden" name="_token">
                                                                {{ csrf_field() }}
                                                                    <button type="submit" class="waves-effect waves-light btn btn-large btn-Cancle">Izbriši</bnutton>
                                                                </form>    
                                                 </div>
                                    </div>
                                    
                                   
                        </div>   
                </div>
            </div>

</div>
-->
<div class="container">
<div style="height:8em;"></div>
<div class="card hoverable" style="width:70%;margin:auto;">
        <div class="card-image  sticky-action waves-effect waves-block waves-light" style="border:1px solid #2e7d327c;">
          <img class="activator" src="storage/cover_images/{{$user->slika}}">
        </div>
        <div class="card-content" >
          <span class="card-title activator grey-text text-darken-4">{{ Auth::user()->name }} {{ Auth::user()->surname }}<i class="material-icons right tooltipped" data-position="right" data-delay="50" data-tooltip="Podrobnosti">more_vert</i></span>
          <div  class="row"style="margin-top:2em;">
              <div class="col s4 left-align">
                    <form action="{{ route('u_destroy')}}" method="POST" type="hidden" name="_token">
                            {{ csrf_field() }}
                                <button type="submit" class="waves-effect waves-light btn btn-large btn-Cancle">Izbriši</bnutton>
                            </form>
            </div>
            <div class="col s5 right-align">
                    
                </div>
            <div class="col s3 right-align">
                    <a href="{{ url('/profileSettings') }}" class="waves-effect waves-light btn btn-large">Spremeni račun</a>
                </div>
          </div>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
     
          <div class="row" style="margin-top:5em;">
              
                <div class="col l6 s12">
                  <b>E-Mail:</b><p>{{ Auth::user()->email }}</p>
                </div>
                <div class="col l6 s12">
                  <b>Telefon:</b><p>{{ Auth::user()->telefon }}</p>
                  </div>
                  <div class="col l6 s12">
                        <b>Davčna številka:</b><p>{{ Auth::user()->davcna }}</p>
                      </div>
                      <div class="col l6 s12">
                        <b>Regija:</b><p>{{ $regija->regija }}</p>
                      </div>
                  
            </div>
            <div class="row" style="margin-top:1em;">
                    
                    <div class="col l12 s12">
                      <b>Opis profila:</b><p>{{ Auth::user()->opis }}</p>
                      </div>
                      
                </div>
        </div>
      </div> 
    </div>      

@endsection




