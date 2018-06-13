<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Storitev;
use App\Kategorija;
use App\Ocena;
use App\Narocilo;
use Storage;
use Illuminate\Support\Facades\DB;
use Auth;

class StoritevController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show','oceni','narocilo','naroci']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = auth()->user()->id;
        //$user = User::find($user_id);
        //$storitve = $user->user_storitev()->get();
        //$storitve_kategorije = $storitve->storitev_kategorija()->join('kategorija', 'kategorija.id', '=', 'storitev.kategorija_id')->get();
        $test = DB::select("SELECT s.id, s.naziv, s.opis, s.created_at, s.slika, k.naziv as k_naziv FROM users u JOIN storitev s ON u.id = s.user_id JOIN kategorija k ON k.id = s.kategorija_id WHERE s.user_id='$user_id'");
        return view('storitev.index')->with('storitve', $test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorije = Kategorija::all();
        return view('storitev.create')->with(array('kategorije'=>$kategorije));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'naziv'=>'required|max:50',
            'opis'=>'required|max:5000',
            'slika'=>'image|nullable|max:1999'
        ],[
            'naziv.max'=>'Všišite naziv pod 50 črkami.',
            'opis.max'=>'Vpišite opis pod 5000 znaki.',
            'slika.ax'=>'Slika je prevelika',
            'naziv.required'=>'Prosim vpišite naziv.',
            'opis.required'=>'Prosim vpišite opis.',
        ]);
        $storitev = new Storitev;
        if($request->hasFile('slika')){
            $filenameWithExt = $request->file('slika')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slika')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('slika')->storeAs('public/cover_images',$fileNameToStore);
            $storitev->slika = $fileNameToStore;
        }
        else
        {
            $storitev->slika = 'noimage.png';
        }

        
        $storitev->naziv = $request->input('naziv');
        $storitev->opis = $request->input('opis');
        $storitev->kategorija_id = $request->input('kategorija');
        $storitev->user_id = auth()->user()->id;
        
        $storitev->save();

        return redirect ('/storitve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $storitev =  DB::select("SELECT s.id, u.opis as u_opis, s.naziv as s_naziv, s.opis, s.created_at, s.slika as s_slika, u.slika as u_slika, k.naziv as k_naziv, r.regija as r_naziv, u.name, u.surname, AVG(o.ocena) as avg_ocena, s.user_id FROM users u JOIN storitev s ON u.id = s.user_id JOIN kategorija k ON k.id = s.kategorija_id JOIN regija r ON r.id = u.regija_id JOIN ocena o ON s.id = o.storitev_id WHERE s.id='$id'");
        return view('storitev.show')->with(array('storitve'=>$storitev));
    }
    public function oceni(Request $request, $id)
    {

        $ocena = new Ocena;
        $ocena->storitev_id = $id;
        $pre_ocena = $request->input('ocena');
        $ocena->ocena= $pre_ocena *10;
        $bgc="";
        if($ocena->ocena <20){
            $bgc="#d50000";
        }
        if($ocena->ocena <40 and $ocena->ocena >=20){
            $bgc="#ff6d00";
        }
        if($ocena->ocena <60){
            $bgc="#ffea00";
        }
        if($ocena->ocena <80){
            $bgc="#64dd17";
        }
        $ocena->save();
        return redirect("/storitve/".$id)->withErrors(['Uspešno ocenjeno!', 'The Message']);
    }

    public function narocilo($id)
    {
        $storitev = Storitev::find($id);
        if(Auth::check()){
            $user_id = auth()->user()->id;
            if($user_id == $storitev->user_id){
                return view('pages.probuSi');
            }
        }
        return view('storitev.narocilo_form')->with('storitev',$storitev);
    }

    public function naroci(Request $request,$id)
    {
        $this->validate($request,[
            'ime'=>'required|max:45',
            'priimek'=>'required|max:45',
            'telefon'=>'required|max:20',
            'email'=>'required|max:320',
            'okvirna_cena'=>'nullable',
            'komentar'=>'nullable|max:5000',
            'datum_zacetka'=>'required',
            'datum_konca'=>'required'
        ],
        [
            'ime.max' =>'Vnesite ime pod 45 črkami.',
            'priimek.max' =>'Vnesite priimek pod 45 črkami.',
            'telefon.max' =>'Vnesite telefon pod 20 znaki.',
            'email.max' =>'Vnesite email pod 320 znaki.',
            'komentar.max' =>'Vnesite ime pod 5000 znaki.',
            'ime.required' =>'Prosim vnesite ime.',
            'priimek.required' =>'Prosim vnesite priimek.',
            'telefon.required' =>'Prosim vnesite telefonsko številko.',
            'email.required' =>'Prosim vnesite E-mail naslov.',
            
        ]);

        $narocilo = new Narocilo;
        $narocilo->ime = $request->input('ime');
        $narocilo->priimek = $request->input('priimek');
        $narocilo->telefon = $request->input('telefon');
        $narocilo->email = $request->input('email');
        $narocilo->okvirna_cena = $request->input('okvirna_cena');
        $narocilo->komentar = $request->input('komentar');
        $narocilo->datum_zacetka = $request->input('datum_zacetka');
        $narocilo->datum_konca = $request->input('datum_konca');
        $narocilo->storitev_id = $id;
        $narocilo->stanje_narocila_id = 1;
        $narocilo->save();

        return redirect("/storitve/".$id)->withErrors(['Naročilo oddano!', 'The Message']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storitev=Storitev::find($id);
        $user_id = auth()->user()->id;
        if($user_id != $storitev->user_id){
            return view('pages.probuSi');
        }
        $kategorije = Kategorija::all();
        return view('storitev.edit')->with(array('storitev'=> $storitev,'kategorije'=>$kategorije));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'naziv'=>'required|max:50',
            'opis'=>'required|max:1000',
            'slika'=>'image|nullable|max:1999'
        ],[
            'naziv.max'=>'Všišite naziv pod 50 črkami.',
            'opis.max'=>'Vpišite opis pod 5000 znaki.',
            'slika.ax'=>'Slika je prevelika',
            'naziv.required'=>'Prosim vpišite naziv.',
            'opis.required'=>'Prosim vpišite opis.',
        ]
    );
        $storitev = Storitev::find($id);
        if($request->hasFile('slika')){
            $filenameWithExt = $request->file('slika')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slika')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('slika')->storeAs('public/cover_images',$fileNameToStore);
            $storitev->slika = $fileNameToStore;
        }
        
        $storitev->naziv = $request->input('naziv');
        $storitev->opis = $request->input('opis');
        $storitev->kategorija_id = $request->input('kategorija');
        
        $storitev->user_id = auth()->user()->id;
        
        $storitev->save();
        
        return redirect('/storitve')->withErrors(['Storitev posodobljena!', 'The Message']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $storitev = Storitev::find($id);
        $user_id = auth()->user()->id;
        if($user_id != $storitev->user_id){
            return view('pages.probuSi');
        }
        $slika = $storitev->slika;
        if($slika != 'noimage.png'){
            Storage::delete('public/cover_images/' . $slika);
        }
        $storitev->delete();
        return redirect('/storitve')->withErrors(['Storitev odstranjena!', 'The Message']);
    }
}