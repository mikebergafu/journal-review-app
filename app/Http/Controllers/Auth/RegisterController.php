<?php

namespace App\Http\Controllers\Auth;

use App\Gender;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Title;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    //Overriding Method by Mike-Berg
    public function showRegistrationForm()
    {
        $title = 'Sign Up';
        $titles = Title::where('active', true)->get();
        $genders = Gender::where('active', true)->get();
        $small_banner_background = 'alazea/img/bg-img/peo.jpg';
        return view('pages.auth.signup', compact('title', 'titles', 'genders', 'small_banner_background'));
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
            'title' => ['required','int'],
            'gender' => ['required','int'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'other_name' => ['nullable','string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
            $messages =[
                'title.required' => 'Please select a title',
                'gender.required' => 'Please select a gender/sex',
                'first_name.required' => 'First Name is Required',
                'last_name.required' => 'Last Name is required',
                'password.required' => 'Password is required',
                'password.min' => 'Password must be at least 8 characters',
                'password.confirmed' => 'Repeat Password does not match',
                'email.required' => 'Email address is required',
                'email.email' => 'A valid email address is required ',
                'email.unique' => 'This email is already signed up',
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
            'title' => $data['title'],
            'gender' => $data['gender'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'other_name' => $data['other_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
