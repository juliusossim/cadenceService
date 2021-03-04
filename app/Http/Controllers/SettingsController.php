<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        return  response()->json(['data'=>Settings::all(), 'status'=>200, 'message'=>'data successfully retrieved'] );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        return  response()->json(['data'=>Settings::create($request->all()), 'status'=>201, 'message'=>'settings successfully initiated',] );
    }

    /**
     * Display the specified resource.
     *
     * @param Settings $settings
     * @return JsonResponse
     */
    public function show(Settings $settings)
    {
        return  response()->json(['data'=>$settings, 'status'=>200, 'message'=>'settings successfully retrieved',] );
    }



    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Settings $settings
     * @return JsonResponse
     */
    public function update(Request $request, Settings $settings)
    {
        $settings->update($request->all());
        return  response()->json(['data'=>$settings, 'status'=>200, 'message'=>'settings successfully saved',] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Settings $settings
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Settings $settings)
    {
        $settings->delete();
        return  response()->json(['data'=>$settings, 'status'=>200, 'message'=>'settings successfully deleted',] );

    }
}
