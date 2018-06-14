@extends('layouts.Lfooter')
@extends('layouts.Lmain')
@section('Title')
    <title>Moj Obrtnik | Iskanje</title>
@endsection
@section('Logo')
    Iskanje
@endsection
@section('Content')
<div class="container white" id="mainContainer" style="min-height:42.7em;">
<div class="row">
        <div style="height:5em;">
                
        </div>
        <div class="col s10 offset-s1">
                <form class="col s12" action="{{ route('IskanjeMain') }}" method="POST" type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                <div class="row">
                    
                <div class="input-field col s6">
                    <select name="kategorija">
                        @if($kategorija_stanje=='k.id')
                            <option value="k.id" selected='selected'>Vse</option>
                        @foreach($kategorije as $kategorija)
                            <option value="{{$kategorija->id}}">{{$kategorija->naziv}}</option>
                        @endforeach 
                        @endif

                        @if($kategorija_stanje!='k.id')
                            <option value="k.id">Vse</option>
                        @foreach($kategorije as $kategorija)
                        @if($kategorija->id==$kategorija_stanje)
                            <option value="{{$kategorija->id}}" selected='selected'>{{$kategorija->naziv}}</option>
                        @else
                            <option value="{{$kategorija->id}}">{{$kategorija->naziv}}</option>
                        @endif
                        @endforeach 
                        @endif
                        </select>
                        <label>Kategorija</label>
                    </div>  
                    <div class="input-field col s6">
                        <select id="regija" name="regija">
                            @if($regija_stanje=='u.regija_id')
                                <option value="u.regija_id">Vse</option>
                            @foreach($regije as $regija)
                                <option value="{{$regija->id}}">{{$regija->regija}}</option>
                            @endforeach 
                            @endif
    
                            @if($regija_stanje!='u.regija_id')
                                <option value="u.regija_id">Vse</option>
                            @foreach($regije as $regija)
                            @if($regija->id==$regija_stanje)
                                <option value="{{$regija->id}}" selected='selected'>{{$regija->regija}}</option>
                            @else
                                <option value="{{$regija->id}}">{{$regija->regija}}</option>
                            @endif
                            @endforeach 
                            @endif
                        </select>
                        <label>Regija</label>
                    </div>  
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="razvrsti">
                            @if($razvrsti_stanje==1)
                                <option id="dis" value="1" selected='selected'>Oceni</option>
                                <option id="dis" value="4">Priljubljenosti</option>
                                <option value="2">Datumu: novejše</option>
                                <option value="3">Datumu: starejše</option>
                            @endif
                            @if($razvrsti_stanje==2)
                                <option id="dis" value="1">Oceni</option>
                                <option id="dis" value="4">Priljubljenosti</option>
                                <option value="2"  selected='selected'>Datumu: novejše</option>
                                <option value="3">Datumu: starejše</option>
                            @endif
                            @if($razvrsti_stanje==3)
                                <option id="dis" value="1">Oceni</option>
                                <option id="dis" value="4">Priljubljenosti</option>
                                <option value="2">Datumu: novejše</option>
                                <option value="3"  selected='selected'>Datumu: starejše</option>
                            @endif
                            @if($razvrsti_stanje==4)
                                <option id="dis" value="1">Oceni</option>
                                <option id="dis" value="4"  selected='selected'>Priljubljenosti</option>
                                <option value="2">Datumu: novejše</option>
                                <option value="3">Datumu: starejše</option>
                            @endif
                            </select>
                        <label>Razvrsti po:</label>
                    </div>
                       
                </div>
                <div class="row">
                    <div class="col s4">   
                    </div>
                    <div class="col s6">
                            <button class="btn waves-effect waves-light btn-large btnMegaSearch" type="submit" name="action"><i class="material-icons left">search</i>
                                Išči
                            </button>
                    </div>     
                </div>
            </form>
        </div>
      </div>
      <div class="divider">

      </div>
      <div style="height:3em;"></div>
      @foreach($storitve as $storitev)
      
      <div class="row">
            <div class="col s12 l8 offset-l2">
              <div class="card white hoverable" style="border:1px solid #2e7d327c;">
                <div class="card-content grey-text text-darken-3">
                  <span class="card-title green-text text-darken-3">{{$storitev->naziv}}</span>
              
                  <div class="row grey-text text-darken-3">
                      <div class="col l6 s12">
                        <b>Kategorija:</b><p>{{$storitev->k_naziv}}</p>
                      </div>
                      <div class="col l6 s12">
                        <b>Regija:</b><p>{{$storitev->r_naziv}}</p>
                        </div>
                        
                  </div>
                  <div class="row">
                        <div class="col l6 s12">
                                <p>
                                        <b style="font-size:1.1em;">Ocena: </b>
                                        <div class="progress">
                                        <div class="determinate" style="width: {{$storitev->avg_ocena}}%;background-color:
                                            @if($storitev->avg_ocena<20)
                                            #d50000
                                            @endif
                                            @if($storitev->avg_ocena<40 and $storitev->avg_ocena >=20)
                                            #e65100
                                            @endif
                                            @if($storitev->avg_ocena<60 and $storitev->avg_ocena >=40)
                                            #ffea00
                                            @endif
                                            @if($storitev->avg_ocena<80 and $storitev->avg_ocena >=60)
                                            #aeea00
                                            @endif
                                            @if($storitev->avg_ocena<100 and $storitev->avg_ocena >=80)
                                            #388e3c
                                            @endif
                                            "></div>
                                        </div></p>
                        </div>
                        <div class="col l6 s12">
                          <b>Datum nastanka:</b><p>{{ Carbon\Carbon::parse($storitev->created_at)->format('d.m.Y') }}</p>
                          </div>
                    </div>
                </div>
                <div class="card-action right-align">
                        <a href="/storitve/{{$storitev->id}}" class="waves-effect waves-light btn btn-large"><i class="material-icons left">more_vert</i>Podrobnosti</a>
                </div>
              </div>
            </div>
          </div>
    @endforeach
</div>
@endsection

