<?php

namespace App\Http\Controllers;

use App\Models\Sequence;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SequenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $data = Sequence::whereUserId(1)->all();
  foreach ($data as $key =>$value)
            if ($key === 'created_at' ||$key === 'updated_at' || $key === 'user_id' )
            unset($key);
        return  response()->json([$data, 'status'=>201, 'message'=>'data successfully retrieved'] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        return  response()->json([Sequence::create($request->all()), 'status'=>201, 'message'=>'success',] );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sequence  $sequence
     * @return Response
     */
    public function show(Sequence $sequence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sequence  $sequence
     * @return Response
     */
    public function edit(Sequence $sequence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sequence  $sequence
     * @return Response
     */
    public function update(Request $request, Sequence $sequence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sequence  $sequence
     * @return Response
     */
    public function destroy(Sequence $sequence)
    {
        //
    }
}
