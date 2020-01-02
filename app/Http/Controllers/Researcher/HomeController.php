<?php

namespace App\Http\Controllers\Researcher;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function profile(){
        $title = 'Profile';


        return view('pages.member.profile', compact('title'));
    }

}
