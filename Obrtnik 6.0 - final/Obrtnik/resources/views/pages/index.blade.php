@extends('layouts.Lfooter')
@extends('layouts.Lmain')

@section('Title')
    <title>Moj Obrtnik | Domov</title>
@endsection
@section('Logo')
    Moj Obrtnik
@endsection
@section('Slika')
<div class="parallax-container center valign-wrapper" style="height:30em;border-bottom:1px solid green;">
        <div class="container">
                <div class="row">
                        <div class="col s12 white-text">
                                <h1 class="center-align green-text text-darken-2" id="indexPictureText">Vaša spletna obrtniška delavnica</h1>
                        </div>
                </div>
        </div>

        <div class="parallax">              
                <img src="/imgs/Woo.png" alt="">
        </div>
</div>
@endsection
@section('Content')


<div class="container">
  <div class="row">
    @if(Auth::check())
      @if(count($narocila)>0)
        <script>Materialize.toast('<i class="material-icons left">error_outline</i>Nova naročila: {{count($narocila)}}', 4000,'red darken-1 z-depth-4 rounded')</script>
      @endif
    @else
    @endif
  </div>
<div class="row">
                   <div class="col m4 s12">
                     <div class="icon-block">
                       <h2 class="center green-text text-darken-3">
                         <i class="material-icons">people</i>  
                       </h2>
                       <h5 class="center">Delavnica za vas</h5>
                       <p class="light">Naša spletna stran je prilagojena tako, da je obrtnikom omogočeno enostavno objavljanje in urejanje svojih obrti, kot tudi pregled nad naročili za posamezno objavljeno obrt. Izbirate lahko med več kot 25 kategorijami obrti.</p>
                     </div>
                     
                   </div>
                   <div class="col m4 s12">
                     <div class="icon-block">
                                <h2 class="center green-text text-darken-3">
                         <i class="material-icons">assignment</i>  
                       </h2>
                       <h5 class="center">Naroči na storitve</h5>
                       <p class="light">Obiskovalcem je na voljo enostaven iskalnik z več kot 10000 obrti in 25 kategorij, katere se da razvrstiti po večih kriterijih. Po izbrani obrti se enostavno odda naročilo, ki ga obrtnik potrdi ali zavrne. Uporabniki lahko glede na izkušnjo z obrtnikom in storitvijo podajo osebno mnenje preko ocene in komentarja. </p>
                     </div> 
                   </div>
                   <div class="col m4 s12">
                     <div class="icon-block">
                                <h2 class="center green-text text-darken-3">
                         <i class="material-icons">work</i>  
                       </h2>
                       <h5 class="center">Postani obrtnik</h5>
                       <p class="light">Registriraj se obrtnik in se pridruži že več kot 10000 obrtnikom na največji slovenski spletni strani, namenjeni za oglaševanje obrti. Ponujamo brezplačno objavo vaše storitve in enostaven pregled nad storitvijo, ocenami, komentarji in naročili.</p>
                     </div> 
                   </div>
</div>
</div>  
<div class="parallax-container center valign-wrapper" style="height:20em;border-bottom:1px solid green;border-top:1px solid green;">
                <div class="container white-text">
                                <div class="row">
                                  <div class="col s12">
                                    <h5 id="indexVmesText">Do sedaj smo z vami objavili že več kot 10000 storitev in obdelali že več kot 5000 naročil. </h5>
                                  </div>
                                </div>
                              </div>
        <div class="parallax">              
                <img src="/imgs/Wp1.png" alt="">
        </div>
</div>
<div class="container" style="">
        <div class="container center-align">
                <div class="section">
                        <div class="row">
                        <div class="col s12">
                        <h4>Kontaktirajte Nas!</h4>
                        <p class="light left-align">
                        Na voljo smo vam vsak delavnik od 8:00 do 16:00. Na sobote, nedelje in praznike ne delamo.
                        V primeru težav nas kontaktirajte na telefonski številki 02 580 303 ali email naslovu: <b>mojobrtnikinfo@obrtnik.si</b> 
                        </p>
                        </div>      
                        </div>
                        </div>
                </div>
</div>
<div class="parallax-container center valign-wrapper" style="height:20em;border-top:1px solid green;">
                <div class="container white-text">
                                <div class="row">
                                  <div class="col s12">
                                    <h5 id="indexVmesText">Pridružite se največji spletni mreži obrtnikov v celi SLoveniji.</h5>
                                  </div>
                                </div>
                              </div>
                <div class="parallax">              
                        <img src="/imgs/Car.jpg" alt="">
                </div>
        </div>
                 
              <script>
                $('.carousel').carousel();
                $('.parallax').parallax();  
                        </script>

       
        

</div>


              


@endsection



