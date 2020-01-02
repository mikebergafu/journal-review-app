<?php

namespace App\Helpers;

class BergyHelper
{

    public static function playSound($path){
        $myAudioFile = public_path('bergy.sounds.failed.wav');
        echo '<EMBED SRC="'.$myAudioFile.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
    }

}
