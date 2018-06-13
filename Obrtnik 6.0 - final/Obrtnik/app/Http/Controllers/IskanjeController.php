<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Storitev;
use App\Kategorija;
use App\Regija;
use Illuminate\Support\Facades\DB;

class IskanjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $kategorije = Kategorija::all(); 
        $regije = Regija::all();

        $kategorija = 'k.id';
        $regija = 'u.regija_id';
        $razvrsti = 1;

        $storitve = DB::select("SELECT s.id, s.naziv, s.opis, s.created_at, s.slika, k.naziv as k_naziv, r.regija as r_naziv, AVG(o.ocena) as avg_ocena FROM users u JOIN storitev s ON u.id = s.user_id JOIN kategorija k ON k.id = s.kategorija_id JOIN regija r ON r.id = u.regija_id LEFT JOIN ocena o ON s.id = o.storitev_id GROUP BY s.id ORDER BY case when avg(o.ocena) is null then 1 else 0 end, avg(o.ocena) DESC, s.created_at DESC");
        return view('pages.iskanje')->with(array('storitve'=> $storitve,'kategorije'=>$kategorije,'regije'=>$regije, 'kategorija_stanje'=>$kategorija,'regija_stanje'=>$regija,'razvrsti_stanje'=>$razvrsti));
    }

    public function iskanje(Request $request)
    {
        $kategorije = Kategorija::all();
        $regije = Regija::all();

        $kategorija = $request->input('kategorija');
        $regija = $request->input('regija');
        $razvrsti = $request->input('razvrsti');

        switch ($razvrsti){
            case "1":
                $order = "case when avg(o.ocena) is null then 1 else 0 end";
                break;
            case "2":
                $order = "s.created_at DESC";
                break;
            case "3":
                $order = "s.created_at ASC";
                break;
            case "4":
                $order = "count(n.storitev_id) DESC";
                break;
        }
        
        $storitve = DB::select("SELECT s.id, s.naziv, s.opis, s.created_at, s.slika, k.naziv as k_naziv, r.regija as r_naziv, AVG(o.ocena) as avg_ocena, u.name as u_name,u.surname as u_surname FROM users u JOIN storitev s ON u.id = s.user_id JOIN kategorija k ON k.id = s.kategorija_id JOIN regija r ON r.id = u.regija_id LEFT JOIN ocena o ON s.id = o.storitev_id LEFT JOIN narocilo n ON s.id = n.storitev_id WHERE k.id=".$kategorija." AND u.regija_id = ".$regija." GROUP BY s.id ORDER BY ".$order.", avg(o.ocena) DESC");
        return view('pages.iskanje')->with(array('storitve'=> $storitve,'kategorije'=>$kategorije,'regije'=>$regije, 'kategorija_stanje'=>$kategorija,'regija_stanje'=>$regija,'razvrsti_stanje'=>$razvrsti));
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
