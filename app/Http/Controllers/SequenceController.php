<?php

namespace App\Http\Controllers;

use App\Models\sequence;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SequenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
     * @param sequence $sequence
     * @return JsonResponse
     */
    public function store(Sequence $sequence)
    {
        return  response()->json($sequence, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sequence  $sequence
     * @return Response
     */
    public function show(sequence $sequence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sequence  $sequence
     * @return Response
     */
    public function edit(sequence $sequence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sequence  $sequence
     * @return Response
     */
    public function update(Request $request, sequence $sequence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sequence  $sequence
     * @return Response
     */
    public function destroy(sequence $sequence)
    {
        //
    }
}
