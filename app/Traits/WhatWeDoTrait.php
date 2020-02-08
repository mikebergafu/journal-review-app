<?php

    namespace App\Traits;

    use App\About;
    use App\WhatWeAre;
    use Illuminate\Http\Request;

    trait WhatWeDoTrait
    {

        public function createWWDText(){
            $title = 'Create What We Do';
            return view('pages.admin.settings.what-we-do.create', compact('title'));
        }

        public function editWWDText(WhatWeAre $about){
            $title = 'Edit What We Do';
            return view('pages.admin.settings.what-we-do.edit', compact('title','about'));
        }

        public function storeWWDText(Request $request){

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

        public function updateWWDText(Request $request){

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

    }
