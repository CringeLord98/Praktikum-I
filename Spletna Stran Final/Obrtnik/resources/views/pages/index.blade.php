@extends('layouts.Lfooter')
@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Domov</title>
@endsection
@section('Logo')
    Moj Obrtnik
@endsection
@section('Slika')
    <div class="row" >
            <div class="col s12" id="indexPicutre">
                    <h1 class="center-align green-text text-darken-3" id="indexPictureText" style="margin-top:2.5em;">Vaša spletna obrtniška delavnica</h1>
            </div>
    </div>
 @endsection
@section('Content')
    <div class="row" >
            <div class="col s12" id="indexMegaSearch">
                    <h4 class="center-align text-grey text-darken-4" id="fntRoboto">Kaj danes iščete?</h4>
            </div>
    </div>
    <br>
      <div class="row">
        <div class="col s10 offset-s1">
           
            {!! MaterialForm::open(array('action' => 'SearchController@IndexSearch', 'method'=>'POST'))  !!}
            <div class="row">
                <div class="col s6">
                  {!! MaterialForm::text('Kategorija', 'kategorija')->required()->icon("search") !!} 
                </div>
                <div class="col s6">
                    {!! MaterialForm::text('Kraj', 'kraj')->required()->icon("location_on") !!} 
                </div>
                
            </div>
            <div class="row">
                <div class="col s4">
                  
                </div>
                <div class="col s6">
                    {!! MaterialForm::submit("Išči")->addClass("btn btn-large btnMegaSearch") !!}
                </div>
                
            </div>
                
            {!! MaterialForm::close() !!}

      
        </div>
       
      </div>
      <div class="divider">
        
    </div> 
@endsection



