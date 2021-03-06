@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Profil</title>
@endsection
@section('Logo') 
Storitev
@endsection

@section('Content')
<div class="container white" id="mainContainer" style="min-height:42.7em;">

    
<div class="row" style="height:1em;"></div>
<form action="{{ route('store') }}" method="POST" type="hidden" name="_token"  enctype="multipart/form-data">
        {{ csrf_field() }}
<div class="white hoverable lighten-4 z-depth-2 grey-text text-darken-3" style="padding:0.5em;width:80%;margin:auto">
    <div class="row">
            <div class="input-field col s10 offset-s1">
                <input id="first_name" type="text" class="validate" name="naziv">
                <label for="first_name">Naziv</label>
                @if ($errors->has('naziv'))
                <span class="invalid1">
                <strong>{{ $errors->first('naziv') }}</strong>
                </span>
                @endif
              </div>
        
    </div>
    <div class="row">
            <div class="input-field col s10 offset-s1">
                  <textarea id="textarea1" class="materialize-textarea" name="opis"></textarea>
                  <label for="textarea1">Opis</label>
                  @if ($errors->has('opis'))
                    <span class="invalid1">
                    <strong>{{ $errors->first('opis') }}</strong>
                    </span>
                    @endif
            </div>
    </div>
    <div class="row">
        <div class="input-field col s10 offset-s1">
            <div>
                <select name="kategorija">
                    @foreach($kategorije as $kategorija)
                        <option value="{{$kategorija->id}}">{{$kategorija->naziv}}</option>
                    @endforeach 
                </select>
            </div>   
            
        </div>
    </div>
        <div class="row">
                <div class="file-field input-field col s10 offset-s1">
                    <div class="btn">
                          <span>Slika</span>
                          <input type="file" name="slika">
                          </div>
                          <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" placeholder="Izberite sliko">
                          @if ($errors->has('slika'))
                          <span class="invalid1">
                          <strong>{{ $errors->first('slika') }}</strong>
                          </span>
                          @endif
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col s12 l2 offset-l9">
                <button type="submit"class="waves-effect waves-light btn btn-large"><i class="material-icons left">check</i>Dodaj</button>
                </div>
        </div>
       
    </div>
    
</form>


<div style="margin-top:5em;">
        
</div>
  


            
</div>
@endsection










