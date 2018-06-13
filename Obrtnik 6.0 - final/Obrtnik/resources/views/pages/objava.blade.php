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
        <div class="col s10 offset-s1" style="">
             <div class="row">
                 <div class="col s12 green darken-3">
                    <div style="color:white;margin:2em;">
                        <h5 id="fntFrancois">!Naziv Store!</h5>
                    </div>
                 </div>
                 <div class="col s6">
                        <div style="color:black;margin:2em;">
                            <h5!>Opis!</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies maximus nulla, sit amet interdum lorem rhoncus a. Duis vel rhoncus nisi. Maecenas vehicula, tellus quis interdum auctor, odio eros sodales mi, nec euismod diam mi quis tortor. Suspendisse nec porta ex. Morbi sed tortor maximus, volutpat augue vel, egestas neque. Nulla sit amet molestie nisl, ac dictum diam. Integer sagittis sagittis massa, ut euismod magna cursus dictum. Duis in pretium nunc, sit amet suscipit augue. Phasellus malesuada at metus sed tincidunt. Aenean at blandit ante. Donec lobortis velit eget justo lacinia, in condimentum mauris ornare. Cras tempor turpis urna. Aliquam dictum quam risus, quis finibus tortor vulputate aliquam. Suspendisse tempor laoreet diam in gravida.</p>
                        </div>
                     </div>
                 <div class="col s6">
                    <div style="color:black;margin:2em;">
                            <div style="margin:3em;">
                                    <div>
                                        <img style="height:20em;width:auto;max-width:30em;border:1px solid green;"src="imgs/woo.png" style="border:2px solid #2e7d32;">
                                    </div>
                                </div>
                    </div>
                </div> 

                <div class="col s6">
                        <a href="" class="waves-effect waves-light btn btn-large">Naroči</a>
                 </div>
            </div> 
            <div class="divider">   
            </div>
            <div class="row">
                    <div class="col s12">
                       <div style="color:black;margin:2em;">
                           <h5 id="fntFrancois">!Avtor!</h5>
                       </div>
                    </div>
                    <div class="col s8">
                           <div style="color:black;margin:2em;">
                               <h5!>Opis Avtorja!</h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies maximus nulla, sit amet interdum lorem rhoncus a. Duis vel rhoncus nisi. Maecenas vehicula, tellus quis interdum auctor, odio eros sodales mi, nec euismod diam mi quis tortor. Suspendisse nec porta ex. Morbi sed tortor maximus, volutpat augue vel, egestas neque. Nulla sit amet molestie nisl, ac dictum diam. Integer sagittis sagittis massa, ut euismod magna cursus dictum. Duis in pretium nunc, sit amet suscipit augue. Phasellus malesuada at metus sed tincidunt. Aenean at blandit ante. Donec lobortis velit eget justo lacinia, in condimentum mauris ornare. Cras tempor turpis urna. Aliquam dictum quam risus, quis finibus tortor vulputate aliquam. Suspendisse tempor laoreet diam in gravida.</p>
                           </div>
                        </div>
                    <div class="col s4">
                       <div style="color:black;margin:2em;">
                            <div style="margin:3em;">
                                    <div class="Pimg" >
                                        <img class="Pimg"src="imgs/person.png" style="border:2px solid #2e7d32;">
                                    </div>
                                </div>
                       </div>
                   </div> 
               </div> 
        </div>



        <div class="col s10 offset-s1" style="border-bottom:2px solid #2e7d32 ;">
            <div class="row">
                <div class="col s12">
                    <h5 id="fntFrancois">Komentarji</h5>
                </div>
            </div>   
        </div>
        <div class="col s10 offset-s1">

            <!-- Komentar    se zacneju tukaj-->
            <div id="Komentar">
                <div class="row" style="margin:0;">
                    <div class="col s10 offset-s1">
                            <p>Lorem ipsm rhoncus tor.  suscipit ia, in condimentum mauris ornare. Cras tempor turpis urna. Aliquam dictum quam risus, quis finibus tortor vulputate aliquam. Suspendisse tempor laoreet diam in gravida.</p>
  
                    </div>
                </div>
                <div class="row" >
                        <div class="col s4 offset-s1">
                                <p id="fntFrancois">Uporabnik:<span id="fntRoboto">Tomaž Zajc</span></p>
                        </div> 
                        <div class="col s4 offset-s1">
                                <p id="fntFrancois">Datum:<span id="fntRoboto">20.4.2018</span></p>
                        </div>                        
                </div> 
            
            
                <div class="divider" style="width:90%;margin:auto;">

                 </div>
            </div>
            <!-- Komentar se zakljuci tukaj-->
        </div>
         
    </div>
   
    

</div>
@endsection
