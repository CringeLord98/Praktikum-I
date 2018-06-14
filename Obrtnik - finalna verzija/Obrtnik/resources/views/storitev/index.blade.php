@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Profil</title>
@endsection
@section('Logo') 
Storitve
@endsection

@section('Content')
<div class="container white" id="mainContainer" style="min-height:42.7em;">

        @if($errors->any())
        <script>Materialize.toast('{{$errors->first()}}', 4000,'green darken-3')</script>
        @endif  
<div class="row" style="height:1em;"></div>
@if(count($storitve)>0)     
        @foreach($storitve as $storitev)
          
    <div class="row">
            <div class="col s12 l8 offset-l2">
              <div class="card white lighten-4 hoverable" style="border:1px solid #2e7d327c;">
                <div class="card-content grey-text text-darken-3">
                  <span class="card-title green-text text-darken-3">{{$storitev->naziv}}</span>
                  <div class="row">
                      <div class="col l6 s12">
                        <b>Kategorija:</b><p>{{$storitev->k_naziv}}</p>
                      </div>
                      <div class="col l6 s12">
                        <b>Datum nastanka:</b><p>{{ Carbon\Carbon::parse($storitev->created_at)->format('d.m.Y') }}</p>
                        </div>
                        
                  </div>
                  
                </div>
                <div class="card-action">
                    <div class="row">
                        <div class="col s6 left-align">
                                <form action="{{ route('destroy', $storitev->id) }}" method="POST" type="hidden" name="_token">
                                        {{ csrf_field() }}
                                {{Form::hidden('_method','DELETE')}}
                                <button href="{{ url('/narocilo') }}" type="submit" class="waves-effect waves-light btn btn-large btn-Cancle"><i class="material-icons left">delete</i>Izbriši</button>
                                </form>     
                        </div>
                        <div class="col s6 right-align">
                                <a href="/storitve/{{$storitev->id}}/edit" class="waves-effect waves-light btn btn-large"><i class="material-icons left">edit</i>Uredi</a> 
                        </div>
                    </div>
                        
                    
                </div>
              </div>
            </div>
          </div>
@endforeach
@else
<div style=margin-top:5em;margin-bottom:3em;>
    <h5 class="grey-text text-darken-3 center-align">Nimate storitev.</h5>
<div>
@endif




<div class="divider" style="width:80%;margin:auto;"></div>  
<div style="margin-top:2em;">
</div>
<div class="row">
    <div class="col s12 center-align">
            <a href="{{ url('/storitve/create') }}"class="btn btn-floating pulse tooltipped" data-position="bottom" data-delay="50" data-tooltip="Dodaj storitev!"><i class="material-icons">add</i></a>
    </div>
</div>
            
</div>
@endsection

