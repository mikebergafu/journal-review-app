<?php

namespace App\Http\Controllers\Researcher;

use App\Gender;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginReq;
use App\Http\Requests\SignUpReq;
use App\Title;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function welcome()
    {
        $notification = array(
            'message' => 'Welcome',
            'alert_type' => 'info',
        );
        return view('pages.welcome')->with($notification);
    }

    public function showLoginForm()
    {
        $title = 'Login';

        return view('pages.auth.login', compact('title'));
    }

    public function processLogin(LoginReq $request)
    {
        return $request->all();
    }

    public function showSignUpForm()
    {
        $title = 'Sign Up';
        $titles = Title::where('active', true)->get();
        $genders = Gender::where('active', true)->get();
        return view('pages.auth.signup', compact('title', 'titles', 'genders'));
    }

    public function processSignUp(SignUpReq $request)
    {
        $title = 'Login';

        $member = new User();
        $member->title = $request->title;
        $member->first_name = $request->first_name;
        $member->last_name = $request->last_name;
        $member->other_name = $request->other_name;
        $member->email = $request->email;
        $member->gender = $request->gender;
        $member->password = Hash::make($request->password);

        if($member->save()){
            $notification = array(
                'message'=>'You\'ve been successfully registered as a member. Please check your mailbox to activate your account',
                'alert_type'=>'success'
            );
        }else{
            $notification = array(
                'message'=>'Sorry! something went wrong',
                'alert_type'=>'danger'
            );
        }

        return view('pages.auth.login', compact('title'))->with($notification);
    }

}
