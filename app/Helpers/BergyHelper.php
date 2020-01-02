<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class BergyHelper
{

    public static function playSound($path){
        $myAudioFile = public_path('bergy.sounds.failed.wav');
        echo '<EMBED SRC="'.$myAudioFile.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
    }

    public static function downloadJSONFile($my_data, $tag='untagged')
    {
        if(env('BERGY_TEST')==='on'){
            $data = json_encode($my_data);
            $fileName = $tag.'_' .time() . '_datafile.json';
            self::mkdir_r(public_path('/test_fol/'));
            File::put(public_path('/test_fol/' . $fileName), $data);
            $file_path = public_path('/test_fol/' . $fileName);
            return Response::download($file_path);
        }
    }

    public static function makeDir1($path)
    {
        return mkdir($path) || is_dir($path);
    }

    public static function mkdir_r($dirName, $rights=0777){
        if(!is_dir($dirName)){
            //Directory does not exist, so lets create it.
            if (!mkdir($dirName, 0755, true) && !is_dir($dirName)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $dirName));
            }
        }
    }

}
