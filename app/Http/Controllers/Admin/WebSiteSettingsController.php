<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\BannerSlider;
use App\Helpers\BergyHelper;
use App\Http\Controllers\Controller;
use App\Traits\WhatWeDoTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebSiteSettingsController extends Controller
{
    use WhatWeDoTrait;
    public function dashboard()
    {
        $title = 'Admin Dashboard';
        $about = About::where('active', true)->first();
        $banners = BannerSlider::where([
            ['active', true],
            ['start_date', '>=', Carbon::today()->toDateString()],
            ['end_date', '<=', Carbon::today()->toDateString()],
        ])->get();

        return view('pages.admin.dashboard.index', compact('title', 'banners','about'));
    }

    public function create_banner_slider()
    {
        $title = 'Create Banner & Slider';
        $banners = BannerSlider::where([
            ['active', true],
            ['start_date', '>=', Carbon::today()->toDateString()],
            ['end_date', '<=', Carbon::today()->toDateString()],
        ])->get();

        return view('pages.admin.dashboard.index', compact('title', 'banners'));
    }

    public function store_banner(Request $request)
    {
        $notification = array(
            'message' => 'Welcome',
            'alert_type' => 'info',
        );
        request()->validate([
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=1920,height=1280',
        ]);
        $imageName = time() . '.' . request()->banner_image->getClientOriginalExtension();
        request()->banner_image->move(public_path('images/banners'), $imageName);

        $data = new BannerSlider();
        $data->banner_title = $request->banner_title;
        $data->banner_message = $request->banner_message;
        $data->banner_image = $imageName;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;

        return $data;
    }

    public function saveDick()
    {

        $url = "https://store.tbnglobal.org/api/v1/auth/signup-save";

        $headers = array(
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        );

        $payload = array(
            'first_name' => 'dixon233',
            'last_name' => 'killer233',
            'email' => 'electronicsrepubl4dd@gmail.com',
            'password' => '1234563333',
        );

        //Do the call here (just like zttp)
        $transaction = BergyHelper::doCurlPost($url, $payload, $headers);

        //log the response here(I m using my own logger here)
        BergyHelper::downloadJSONFile($transaction, 'dick');
    }

    public function createAboutText(){
        $title = 'Create Abouts';
        return view('pages.admin.settings.about.create', compact('title'));
    }

    public function editAboutText(About $about){
        $title = 'Edit Abouts';
        return view('pages.admin.settings.about.edit', compact('title','about'));
    }

    public function storeAboutText(Request $request){

        $about = new About();
        $about->about_text = $request->about_text;

        if($about->save()){
            $notification = array(
                'message'=>'Data successfully save.',
                'alert_type'=>'success'
            );
        }else{
            $notification = array(
                'message'=>'Sorry! something went wrong',
                'alert_type'=>'danger'
            );
        }
        $title = 'Create Abouts';
        return  view('pages.admin.settings.about.create', compact('title'))->with($notification);
    }

    public function updateAboutText(Request $request){

        $about = About::find($request->id);
        $about->about_text = $request->about_text;
        if($about->save()){
            $notification = array(
                'message'=>'Data successfully updated.',
                'alert_type'=>'success'
            );
        }else{
            $notification = array(
                'message'=>'Sorry! something went wrong',
                'alert_type'=>'danger'
            );
        }
        $title = 'Create Abouts';
        return  view('pages.admin.settings.about.edit', compact('title'))->with($notification);
    }

    public function getAbout(){
        return About::first();
    }

}
