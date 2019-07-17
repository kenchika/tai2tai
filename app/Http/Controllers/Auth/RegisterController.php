<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\IdCard;
use App\Bank;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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
  protected $redirectTo = '/home';

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
  protected function validator(array $data)
  {
    return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
      'birth_date' => ['required', 'string', 'max:255'],
      'phone_number' => ['required', 'string', 'max:255'],
      'nationality' => ['required', 'string', 'max:255'],
      'wechat_id' => ['required', 'string', 'max:255'],
      'id_card_number' => ['required', 'string', 'max:255'],
      'expiration_date' => ['required', 'string', 'max:255'],
      'id_bank_number' => ['required', 'string', 'max:255'],
      'bank_name' => ['required', 'string', 'max:255'],
    ]);
  }


  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return \App\User
  */
  protected function create(array $data)
  {


    $user=User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'birth_date' => $data['birth_date'],
      'phone_number' => $data['phone_number'],
      'nationality' => $data['nationality'],
      'wechat_id' => $data['wechat_id'],
    ]);





    $user->Bank()->create([

      'id_bank_number' => $data['id_bank_number'],
      'bank_name' => $data['bank_name'],

    ]);
    $user->IdCard()->create([
      'id_card_number' => $data['id_card_number'],
      'expiration_date' => $data['expiration_date'],

    ]);



    return $user;

  }

  /**
  * Handle a registration request for the application.
  *
  * @param  \Illuminate\Http\Request $request
  * @return \Illuminate\Http\Response
  */
  public function register(Request $request)
  {
    $this->validator($request->all())->validate();

    $user= $this->create($request->all());

    event(new Registered($user));
    return $this->registered($request, $user)
    ?: redirect($this->redirectPath());
  }
}
