<?php

namespace App\Http\Controllers\Admin;

use App\BannerSlider;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebSiteSettingsController extends Controller
{
    public function create_banner_slider(){

        $title = 'Create Banner & Slider';
        $banners = BannerSlider::where([
            ['active', true],
            ['start_date', '>=', Carbon::today()->toDateString()],
            ['end_date', '<=', Carbon::today()->toDateString()]
        ])->get();

        return view('pages.admin.dashboard.index', compact('title', 'banners'));
    }

    public function store_banner(Request $request){
        return $request->all();
    }

}
