<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Regija;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function showRegistrationForm(){
        $regije = Regija::all();
        return view('auth.register')->with('regije',$regije);
    }
    protected function validator(array $data)
    {
        //Ime more bit z vlko zacetnico
        return Validator::make($data, [
            'name' => 'required|string|max:45',
            'surname' => 'required|string|max:45',
            'email' => 'required|string|email|max:45|unique:users',
            'password' => 'required|string|min:3|confirmed',
            'davcna' => 'required|string|min:8|max:8',
            'telefon' => 'required|string|min:3'
        ],
        [
            'name.max' => 'Vnesite ime pod 45 črkami.',
  
            
            'surname.max' => 'Vnesite priimek pod 45 črkami.',
  
            
            'email.max' => 'Vnesite Email pod 45 črkami.',
  
           
            'password.min' => 'Vnesite geslo nad 3 črkami.',
  
            'davcna.max' => 'Vnesite 8-mestno davčno številko.',

            'davcna.min' => 'Vnesite 8-mestno davšno številko',
  
            'telefon.min' => 'Vnesite telefon nad 3 številkami.',
          ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'davcna' => $data['davcna'],
            'telefon' => $data['telefon'],
            'slika' => 'noprofile.png',
            'regija_id' => $data['regija_id']
        ]);
    }
}
