<?php

    namespace App\Helpers;

    use App\Edition;
    use GuzzleHttp\Client;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Response;
    use Zttp\Zttp;

    class BergyHelper
    {

        public static function playSound($path)
        {
            $myAudioFile = public_path('bergy.sounds.failed.wav');
            echo '<EMBED SRC="'.$myAudioFile.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
        }

        public static function downloadJSONFile($my_data, $tag = 'untagged')
        {
            if (env('BERGY_TEST') === 'on') {
                $data = json_encode($my_data);
                $fileName = $tag.'_'.time().'_datafile.json';
                self::mkdir_r(public_path('/test_fol/'));
                File::put(public_path('/test_fol/'.$fileName), $data);
                $file_path = public_path('/test_fol/'.$fileName);
                return Response::download($file_path);
            }
        }

        public static function makeDir1($path)
        {
            return mkdir($path) || is_dir($path);
        }

        public static function mkdir_r($dirName, $rights = 0777)
        {
            if (!is_dir($dirName)) {
                //Directory does not exist, so lets create it.
                if (!mkdir($dirName, 0755, true) && !is_dir($dirName)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $dirName));
                }
            }
        }

        public static function prePad($amount = 0, $no_of_digits = 12, $pad_digit = '0'): string
        {
            return str_pad($amount * 100, $no_of_digits, $pad_digit, STR_PAD_LEFT);
        }

        public static function zttpPOST($headers, $url, $payload)
        {
            return Zttp::withHeaders($headers)->post($url, $payload)->json();
        }

        public static function zttpGET($headers, $url, $payload)
        {
            return Zttp::withHeaders($headers)->get($url)->json();
        }

        public static function guzzPost($url, $payload, $headers)
        {
            $client = new Client(['verify' => false]);
            return $client->post($url, $payload);

        }

        public static function doCurlPost($url, $payload, $headers)
        {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $payload,
                CURLOPT_HTTPHEADER => $headers,
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            $split = json_decode($response);

            if ($err) {
                array('error' => $err);
            } else {
                return $split;
            }

        }

        public static function ordinal($number)
        {
            $ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');
            if ((($number % 100) >= 11) && (($number % 100) <= 13)) {
                return $number.'th';
            } else {
                return $number.$ends[$number % 10];
            }
        }

        public static function getEditions()
        {
            return Edition::where('active', true)->get();
        }

        public static function getMtnMomoToken()
        {
            $url = 'https://sandbox.momodeveloper.mtn.com/collection/token/';
            $apiUser = '4f748d0b-3840-4f81-bd20-1175400322a6';
            $apiKey = '4ddf4ad4dfc24a9fa1ee75ee1c436eb3';
            $subKey = 'ed4079b28afd48c99a033a7e0bb9be46';
            $cred = $apiUser.':'.$apiKey;

            return self::guzAuthPost($url, $cred, $subKey);

        }

        public static function guzAuthPost($url, $payload, $sub_key)
        {
            $client = new Client();
            $credentials = base64_encode($payload);
            $response = $client->post($url,
                [
                    'headers' => [
                        'Authorization' => 'Basic '.$credentials,
                        'Ocp-Apim-Subscription-Key' => $sub_key,
                    ],
                ]);
            return $response->getBody();
        }

        public static function refreshMomoToken()
        {
           /* $resp =  json_decode(self::mtnMomoToken());
            return Carbon::now()->addSeconds($resp->expires_in);*/
        }

        public static function gen_uuid_v4() {
            try {
                return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                    random_int(0, 0xffff), random_int(0, 0xffff),
                    random_int(0, 0xffff),
                    random_int(0, 0x0fff) | 0x4000,
                    random_int(0, 0x3fff) | 0x8000,
                    random_int(0, 0xffff), random_int(0, 0xffff), random_int(0, 0xffff)
                );
            } catch (\Exception $e) {
            }
        }
    }
