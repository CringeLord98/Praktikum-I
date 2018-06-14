<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guest())
        {
            return view('pages.index');
        }
        $user_id = auth()->user()->id;
        $narocila = DB::select("SELECT n.id FROM narocilo n JOIN storitev s ON s.id = n.storitev_id WHERE s.user_id = '$user_id' AND n.stanje_narocila_id=1");
        return view('pages.index')->with('narocila',$narocila);
    }
}
