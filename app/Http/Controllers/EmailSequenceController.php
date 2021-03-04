<?php

namespace App\Http\Controllers;

use App\Models\EmailSequence;
use App\Models\Settings;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmailSequenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return  response()->json(['data'=>EmailSequence::all(), 'status'=>200, 'message'=>'data successfully retrieved'] );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $settingsData =[
            'day'=>$request->day,
            'time'=>$request->time,
            'andor'=>$request->condition==='and',
        ];

        $settings = Settings::create($settingsData);
//        dd($settings);
        if ($settings){
            $emailData = [
                'template'=>$request->template_id,
                'settings'=>$settings->id,
                'sequence_id'=>$request->id,
                'conditions'=>$request->conditions,
            ];
          $email =  EmailSequence::create($emailData);
          if ($email)
            return  response()->json(['data'=>[$email, $settings], 'status'=>201, 'message'=>'email cadence successfully initiated',] );

        }
        return  response()->json(['data'=>null, 'status'=>404, 'message'=>'email cadence not created',] );

    }

    /**
     * Display the specified resource.
     *
     * @param EmailSequence $emailSequence
     * @return JsonResponse
     */
    public function show(EmailSequence $emailSequence)
    {
        return  response()->json(['data'=>$emailSequence, 'status'=>200, 'message'=>'email cadence successfully retrieved',] );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param EmailSequence $emailSequence
     * @return JsonResponse
     */
    public function update(Request $request, EmailSequence $emailSequence)
    {
        $emailSequence->update($request->all());
        return  response()->json(['data'=>$emailSequence, 'status'=>200, 'message'=>'email cadence successfully saved',] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param EmailSequence $emailSequence
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(EmailSequence $emailSequence)
    {
        $emailSequence->delete();
        return  response()->json(['data'=>$emailSequence, 'status'=>200, 'message'=>'email cadence successfully deleted',] );

    }
}
