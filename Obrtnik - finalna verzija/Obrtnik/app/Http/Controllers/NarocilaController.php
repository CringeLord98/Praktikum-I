<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Narocilo;
use Mail;

class NarocilaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $razvrsti=1;
        $narocila = DB::select("SELECT n.id as n_id, s.naziv as s_naziv, n.ime, n.priimek, n.email, n.telefon, n.created_at, n.datum_zacetka, n.datum_konca, n.komentar, n.okvirna_cena FROM narocilo n JOIN storitev s ON s.id = n.storitev_id WHERE s.user_id = '$user_id' AND n.stanje_narocila_id=1");

        return view('user.narocila')->with(array('narocila'=>$narocila,'stanje'=>$razvrsti));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user_id = auth()->user()->id;
        
        $narocila = DB::select("SELECT n.id as n_id, u.id as user_id, s.naziv as s_naziv, n.ime, n.priimek, n.email, n.telefon, n.created_at, n.datum_zacetka, n.datum_konca, n.komentar, n.okvirna_cena, n.stanje_narocila_id as stanje FROM narocilo n JOIN storitev s ON s.id = n.storitev_id JOIN users u ON u.id = s.user_id WHERE n.id = '$id'");
        foreach($narocila as $narocilo){
            if($user_id != $narocilo->user_id){
                return view('pages.probuSi');
            }
        }
        return view('user.narocilo')->with('narocila',$narocila);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function razvrsti(Request $request)
    {
        $user_id = auth()->user()->id;
        $razvrsti = $request->input('razvrsti');
        $narocila = DB::select("SELECT n.id as n_id, s.naziv as s_naziv, n.ime, n.priimek, n.email, n.telefon, n.created_at, n.datum_zacetka, n.datum_konca, n.komentar, n.okvirna_cena, n.stanje_narocila_id FROM narocilo n JOIN storitev s ON s.id = n.storitev_id WHERE s.user_id = '$user_id' AND n.stanje_narocila_id='$razvrsti'");

        return view('user.narocila')->with(array('narocila'=>$narocila,'stanje'=>$razvrsti));
    }

    public function zavrni($id)
    {
        $narocilo = Narocilo::find($id);
        $narocilo->stanje_narocila_id = 3;
        $narocilo->save();

        
            Mail::send(['text'=>'mail2'],['name','test'], function ($Message) use ($narocilo){
                $Message->to($narocilo->email,'Test')->subject('Narocilo zavrnjeno');
                $Message->from('mojobtnikinfo@gmail.com','MojObrtnik');
            });
    
        

        return redirect('/narocila/'.$id);

    }

    public function odobri($id)
    {
        $narocilo = Narocilo::find($id);
        $narocilo->stanje_narocila_id = 2;
        $narocilo->save();

       
            Mail::send(['text'=>'mail'],['name','test'], function ($Message) use ($narocilo){
                $Message->to($narocilo->email,'Test')->subject('Narocilo odobreno');
                $Message->from('mojobtnikinfo@gmail.com','MojObrtnik');
            });
    
        

        return redirect('/narocila/'.$id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
