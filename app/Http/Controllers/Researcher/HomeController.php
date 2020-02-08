<?php

    namespace App\Http\Controllers\Researcher;

    use App\About;
    use App\DataSync;
    use App\Helpers\BergyHelper;
    use App\Http\Controllers\Controller;
    use App\PartyType;
    use App\Payment;
    use stdClass;

    class HomeController extends Controller
    {
        public function index()
        {
            $about = About::where('active', true)->first();
            return view('pages.home', compact('about'));
        }

        public function profile()
        {
            $title = 'Profile';

            return view('pages.member.profile', compact('title'));
        }

        public function momo()
        {

            $object = new stdClass();
            $object->amount = 1.00;
            $object->currency = 'EUR';
            $object->externalId = BergyHelper::gen_uuid_v4();
            $object->partyIdType = PartyType::find(1)->value('name');
            $object->partyId = '233246102372';
            $object->payerMessage = 'Test MOMO Api';
            $object->payeeNote = 'You Just made a purchase';

            $url = 'https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay';
            $headers = array(
                /*'X-Callback-Url' => 'https://webhook.site/9856917f-873d-4113-a917-14190b37194c',*/
                'Authorization' => 'Bearer '.BergyHelper::getMtnMomoToken(),
                'X-Reference-Id' => $object->externalId,
                'X-Target-Environment' => env('MOMO_ENVIRONMENT'),
                'Content-Type' => 'application/json',
                'Ocp-Apim-Subscription-Key' => env('MOMO_COLLECTION_SUBSCRIPTION_KEY'),
            );

            $payload = array(
                'amount' => $object->amount,
                'currency' => $object->currency,
                'externalId' => $object->externalId,
                'payer' => array(
                    'partyIdType' => $object->partyIdType,
                    'partyId' => $object->partyId,
                ),
                'payerMessage' => $object->payerMessage,
                'payeeNote' => $object->payeeNote,
            );

            $payment = new Payment();
            $payment->amount = $object->amount;
            $payment->currency_id = 1;
            $payment->externalId = $object->externalId;
            $payment->partyIdType_id = 1;
            $payment->msisdn = $object->partyId;
            $payment->status_id = 1;

            $resp = BergyHelper::zttpPOST($headers, $url, $payload);

          /*  if(http_send_status(202)){
                $payment->save();
                return $payment;
            }

            return 'An Error';*/
            $payment->save();
            //dd($resp);
            return $payment;
        }

        public function getPayments(){
            return Payment::with('status')
                ->with('currency')
                ->with('partyIdType')
                ->get();
        }

        public function dataSync()
        {
            if ($transaction = json_decode(file_get_contents('php://input'), true)) {
                //event(new WebHook($transaction));
                //BergyUtils::downloadJSONFile($transaction);
                /* $data_sync = new DataSync();
                 $data_sync->data = json_encode($transaction);
                 $sa =$data_sync->save();*/
                $sa = BergyHelper::downloadJSONFile($transaction);

                if ($sa) {
                    return response()->json(['success' => true], 200);
                }
            }
            return response()->json(['success' => false], 200);
        }

    }
