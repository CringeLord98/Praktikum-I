@extends('layouts.Lmain')
@section('Title')
    <title>Moj Obrtnik | Iskanje</title>
@endsection
@section('Logo')
    Iskanje
@endsection
@section('Content')
<div class="container" id="mainContainer" style="min-height:42.7em;">
@foreach($storitve as $storitev)
    <div class="container" style="background-color:wheet; margin-top:1em;margin-bottom:2em;">
            <div style="height:4em; margin-bottom:1em;">
                <div class="container" style="width:30%;">
                        @if($errors->any())
                        <script>Materialize.toast('<i class="material-icons left">check</i>{{$errors->first()}}', 4000,'green darken-3')</script>
                        @endif      
                </div> 
            </div>
            <div class="">
                    <div class="row">
                            <div class="col s12 m12">
                              <div class="card hoverable">
                                <div class="card-image" >
                                  <img src="/storage/cover_images/{{ $storitev->s_slika }}" >
                                  @if(Auth::check())
                                  @if(auth()->user()->id==$storitev->user_id)

                                  @else
                                  <a class="btn-floating halfway-fab pulse waves-effect waves-light green darken-3 tooltipped" data-position="left" href="/storitve/{{$storitev->id}}/narocilo" data-delay="50" data-tooltip="Naroči na storitev"><i class="material-icons">add</i></a>
                                  @endif
                                  @else
                                  <a class="btn-floating halfway-fab pulse waves-effect waves-light green darken-3 tooltipped" data-position="left" href="/storitve/{{$storitev->id}}/narocilo" data-delay="50" data-tooltip="Naroči na storitev"><i class="material-icons">add</i></a>
                                  @endif
                                </div>
                                <div class="card-content">
                                        <span class="card-title">{{$storitev->s_naziv}}</span>
                                </div>
                        </div>

                        <ul class="collapsible popout hoverable grey-text text-darken-3" data-collapsible="accordion" style="border:0;box-shadow:0;">
                                <li class="active">
                                  <div class="collapsible-header active"><i class="material-icons">info</i>Opis Storitve</div>
                                  <div class="collapsible-body">
                                      <div class="row">
                                        <div class="col s12 l12"><p>{{$storitev->opis}}</p></div>
                                        <div class="col s12 l6">
                                            <b style="font-size:1.1em;">Kategorija: </b><p>{{$storitev->k_naziv}}</p>
                                        </div>
                                        <div class="col s12 l6">
                                                <b style="font-size:1.1em;">Datum nastanka:</b><p>{{ Carbon\Carbon::parse($storitev->created_at)->format('d.m.Y') }}</p>
                                            </div>
                                    </div>
                                        <div class="row">
                                            <div class="col s12 l6">
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
                                            <div class="col s12 l6">
                                                    <b style="font-size:1.1em;">Regija:</b><p>{{($storitev->r_naziv) }}</p>
                                              </div>
                                        </div>
                                        
                                      
                                  </div>
                                </li>
                                <li>
                                  <div class="collapsible-header"><i class="material-icons">person</i>Avtor</div>
                                  <div class="collapsible-body">
                                        <div class="row">
                                                <div class="col s12 l4">
                                                  <div class="card">
                                                  @if($storitev->u_slika=="noprofile.png")
                                                  <div class="card-image">
                                                            <img src="/storage/cover_images/{{ $storitev->u_slika }}"></img>
                                                            <br>                                
                                                    <span class="card-title black-text">{{$storitev->name}} {{$storitev->surname}}</span>
                                                    </div>
                                                  @else
                                                  <div class="card-image">
                                                            <img src="/storage/cover_images/{{ $storitev->u_slika }}"></img>
                                                    <span class="card-title">{{$storitev->name}} {{$storitev->surname}}</span>
                                                    </div>
                                                  @endif
                                                    
                                                  </div>
                                                </div>
                                                <div class="col s12 l8">
                                                        <p>{{$storitev->u_opis}}</p>
                                                </div>
                                        </div>
                                  </div>
                                </li>
                                <li class="">
                                                <div class="collapsible-header active"><i class="material-icons">mode_comment</i>Komentarji</div>
                                                <div class="collapsible-body">
                                                      <div class="container">
                                                        
                                                        @foreach($komentarji as $komentar)
                                                              <div class="left-align">
                                                                      <div class="row">
                                                                      <div class="col s12 l12 ">
                                                                              <div class="card-panel hoverable z-depth-4" style="padding:1em;">
                                                                              <p class="grey-text text-darken-4" style="font-size:1.2em;"><i class="material-icons left">insert_comment</i><b>Komentar ustvarjen: {{ Carbon\Carbon::parse($komentar->created_at)->format('d.m.Y') }}</b></p>
                                                                              <p>
                                                                                {{$komentar->komentar}}
                                                                              </p>
                                                                              </div>
                                                                      </div>
                                                                      </div>
                                                              </div>
                                                      @endforeach       
                                                      @if(count($komentarji)==0)
                                                      <div>
                                                              <h5 class="center-align">Ni komentarjev</h5>
                                                      </div>
                                                      @endif
                                                      </div>
                                                </div>
                                              </li>
                        </ul>

                        <div class="row">
                        @if(Auth::check())
                        @if(auth()->user()->id==$storitev->user_id)

                        @else
                                <form action="{{ route('oceni', $storitev->id) }}" method="POST" type="hidden" name="_token">
                            <div class="col s12 l6 offset-l2">                                  
                                            {{ csrf_field() }}
                                            <p class="range-field">
                                                    <input name="ocena"type="range" id="test5" min="1" max="10" />
                                            </p>
                                                   
                            </div>
                            <div class="col s12 l4">
                                    <button type="submit"class="waves-effect waves-light btn btn-large"><i class="material-icons left">grade</i>Oceni</button>  
                            </div>
                        </form>
                        @endif
                        @else
                        <form action="{{ route('oceni', $storitev->id) }}" method="POST" type="hidden" name="_token">
                            <div class="col s12 l6 offset-l2">                                  
                                            {{ csrf_field() }}
                                            <p class="range-field">
                                                    <input name="ocena"type="range" id="test5" min="1" max="10" />
                                            </p>
                                                   
                            </div>
                            <div class="col s12 l4">
                                    <button type="submit"class="waves-effect waves-light btn btn-large"><i class="material-icons left">grade</i>Oceni</button>  
                            </div>
                        </form>
                        @endif
                              </div>
                        @if(Auth::check())
                        @if(auth()->user()->id==$storitev->user_id)

                        @else
                        <div style="width:95%;margin:auto;">
                                <div class="row">
                                        <div class="col s12 m12">
                                                <div class="card white hoverable darken-3 z-depth-2" style="border:0.4px solid green;">
                                                <div class="card-content grey-text text-darken-3">
                                                        <div class="row ">
                                                                <div class="col s12 l3 ">
                                                                        <span class="card-title ">Komentiraj</span>
                                                                </div>
                                                                
                                                                
                                                        </div>
                                                <form action="{{ route('komentiraj', $storitev->id) }}" method="POST" type="hidden" name="_token"> 
                                                        {{ csrf_field() }}     
                                                <div class="input-field">
                                                                <textarea id="textarea1" class="materialize-textarea" name="komentar" placeholder="Napišite komentar..."></textarea>
                                                                <label for="txtarea"></label>
                                                                @if ($errors->has('komentar'))
                                                                <span class="invalid1">
                                                                        <strong>{{ $errors->first('komentar') }}</strong>
                                                                </span>
                                                                @endif
                                                        </div>
                                                </div>
                                                
                                                <div class="card-action">
                                                        <div class="right-align">
                                                        
                                                                        
                                                                <button type="submit"class="waves-effect waves-light btn btn-large"><i class="material-icons left">mode_comment</i>Komentiraj</button> 
                                                          
                                                        </div>       
                                                </div>
                                        </form>
                                        
                                                </div>
                                        </div>
                                </div>
                      </div>     
                        @endif
                         @else
                              <div style="width:95%;margin:auto;">
                                        <div class="row">
                                                <div class="col s12 m12">
                                                        <div class="card white hoverable darken-3 z-depth-2" style="border:0.4px solid green;">
                                                        <div class="card-content grey-text text-darken-3">
                                                                <div class="row ">
                                                                        <div class="col s12 l3 ">
                                                                                <span class="card-title ">Komentiraj</span>
                                                                        </div>
                                                                        
                                                                        
                                                                </div>
                                                        <form action="{{ route('komentiraj', $storitev->id) }}" method="POST" type="hidden" name="_token"> 
                                                                {{ csrf_field() }}     
                                                        <div class="input-field">
                                                                        <textarea id="textarea1" class="materialize-textarea" name="komentar" placeholder="Napišite komentar..."></textarea>
                                                                        <label for="txtarea"></label>
                                                                        @if ($errors->has('komentar'))
                                                                        <span class="invalid1">
                                                                                <strong>{{ $errors->first('komentar') }}</strong>
                                                                        </span>
                                                                        @endif
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="card-action">
                                                                <div class="right-align">
                                                                
                                                                                
                                                                        <button type="submit"class="waves-effect waves-light btn btn-large"><i class="material-icons left">mode_comment</i>Komentiraj</button> 
                                                                  
                                                                </div>       
                                                        </div>
                                                </form>
                                                
                                                        </div>
                                                </div>
                                        </div>
                              </div>
                              @endif

                    </div>
                </div>
                          
            </div>
    </div>
@endforeach
</div
@endsection

