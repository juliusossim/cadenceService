<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\taskSequence;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TaskSequenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return  response()->json(['data'=>TaskSequence::all(), 'status'=>200, 'message'=>'data successfully retrieved'] );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {

        $settings = Settings::create(array(
            'day'=>$request->day,
            'time'=>$request->time,
            'andor'=>$request->condition==='and',
        ));
        $saveTask = Http::withToken($request->taskToken)->withHeaders( [
        'Accept'=>  "application/json",
        "Content-Type"=>  "application/json",
        "Access-Control-Allow-Origin"=> $request->windowUrl
      ]) ->post($request->taskUrl, [
            'title' => $request->task_title,
            'description' => $request->description,
            'task_owner' => $request->task_owner,
        ]);
         $tasks = Settings::create(array(
            'day'=>$request->day,
            'time'=>$request->time,
            'andor'=>$request->condition==='and',
        ));


        if ($settings){
            $email =  TaskSequence::create(array(
                'template_id'=>$request->task_id,
                'settings'=>$settings->id,
                'sequence_id'=>$request->sequence_id,
                'conditions'=>$request->conditions,
            ));
            if ($email)
                return  response()->json(['data'=>[$settings, $email]] );

        }
        return  response()->json(['data'=>null, 'status'=>404, 'message'=>'email cadence not created',] );

    }

    /**
     * Display the specified resource.
     *
     * @param TaskSequence $taskSequence
     * @return JsonResponse
     */
    public function show(TaskSequence $taskSequence)
    {
        return  response()->json(['data'=>$taskSequence, 'status'=>200, 'message'=>'email cadence successfully retrieved',] );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param TaskSequence $taskSequence
     * @return JsonResponse
     */
    public function update(Request $request, TaskSequence $taskSequence)
    {
        $taskSequence->update($request->all());
        return  response()->json(['data'=>$taskSequence, 'status'=>200, 'message'=>'email cadence successfully saved',] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param TaskSequence $taskSequence
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(TaskSequence $taskSequence)
    {
        $taskSequence->delete();
        return  response()->json(['data'=>$taskSequence, 'status'=>200, 'message'=>'email cadence successfully deleted',] );

    }
}
