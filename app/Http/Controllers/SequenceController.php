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
        return  response()->json(['data'=>Sequence::all(), 'status'=>200, 'message'=>'data successfully retrieved'] );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        return  response()->json(['data'=>Sequence::create($request->all()), 'status'=>201, 'message'=>'success',] );
    }

    /**
     * Display the specified resource.
     *
     * @param Sequence $sequence
     * @return Response
     */
    public function show(Sequence $sequence)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Sequence $sequence
     * @return JsonResponse
     */
    public function update(Request $request, Sequence $sequence)
    {
        $sequence->update($request->all());
        return  response()->json(['data'=>$sequence, 'status'=>200, 'message'=>'updated successfully',] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sequence $sequence
     * @return Response
     */
    public function destroy(Sequence $sequence)
    {
        //
    }
}
