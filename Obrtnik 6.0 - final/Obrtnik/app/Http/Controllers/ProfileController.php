<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;    
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;
use App\Regija;
use Storage;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index(){
        $regije = Regija::all();
        return view('user.profileSettings')->with('regije',$regije);
    }
    public function profile(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('user.profile')->with('user',$user);
    }
    public function destroy(){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $slika = $user->slika;
        if($slika != 'noprofile.png'){
            Storage::delete('public/cover_images/' . $slika);
        }
        $tests = DB::select("SELECT s.slika as s_slika FROM users u JOIN storitev s ON u.id = s.user_id");
        foreach($tests as $test){
            $slika = $test->s_slika;
            if($slika != 'noimage.png'){
                Storage::delete('public/cover_images/' . $slika);
            }
        }
        $user->delete();
        return redirect('/');
    }
    public function update(Request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $this->validate($request,[
            'name' => 'required|string|max:45',
            'surname' => 'required|string|max:45',
            'email' => 'required|string|email|max:45|unique:users,email,'.$user->id,
           // 'email' => ['required','string','email', 'max:45', Rule::unique('users')->ignore($user->id)],
            'password' => 'required|string|min:3|confirmed',
            'davcna' => 'required|string|min:8|max:8',
            'telefon' => 'required|string|min:3',
            'opis' => 'nullable|string|max:5000'
        ],
        [
            'password.required' => 'Geslo je obvezno.',
            'password.confirmed' => 'Gesli se morata ujemati.',
            'password.min' => 'Geslo mora vsebovati najmanj 3 znake.',

            'name.max' => 'Vpišite ime pod 45 črkami.',
            'surname.max' => 'Vpišite priimek pod 45 črkami.',
            'email.unique' => 'Email že obstaja.',
            'email.email' => 'Vpišite pravilen E-mail.',
            'davcna.max' => 'Vpišite davčno številko z 8 znaki.',
            'davcna.min' => 'Vpišite davčno številko z 8 znaki.',
            'telefon.max' => 'Vpišite telefon pod 20 znaki.',
            'opis.max' => 'Vpišite opis pod 5000 znaki.',

            'name.required' =>'Prosim vnesite ime.',
            'surname.required' =>'Prosim vnesite priimek.',
            'telefon.required' =>'Prosim vnesite telefonsko številko.',
            'email.required' =>'Prosim vnesite E-mail naslov.',
            'davcna.required' =>'Prosim vnesite davčno številko naslov.'
        ]);

        if($request->hasFile('slika')){
            $filenameWithExt = $request->file('slika')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slika')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('slika')->storeAs('public/cover_images',$fileNameToStore);
            $user->slika = $fileNameToStore;
        }
          
          
          $user->name= $request->input('name');
          $user->surname= $request->input('surname');
          $user->email = $request->input('email');
          $user->password= Hash::make($request['password']);
          $user->davcna = $request->input('davcna');
          $user->opis = $request->input('opis');
          $user->regija_id = $request->input('regija_id');
          $user->save();
        
          return redirect('/profile');
    }
}
