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

//        $table->id();
//        $table->string('name');
//        $table->tinyInteger('user_id');
//        $table->string('prospect');
//        $table->integer('specified'); /*status_id*/
//        $table->bigInteger('iteration');
//        $table->boolean('activated');
//        $table->boolean('completed');
//        $table->boolean('replied');
//        $table->boolean('unsubscribed');
//        $table->boolean('linear');
//        $table->boolean('status');  /* 0 -> pe

        $data = [
            'name'=>$sequence->sequence_name ?? null,
            'user_id'=>$sequence->owner ?? null,
            'prospect'=>$sequence->cadidate ?? null,
            'specified'=>$sequence->sequence_name ?? null,
            'activated'=>$sequence->activate ?? null,
            'completed'=>$sequence->complete ?? null,
            'replied'=>$sequence->replied ?? null,
            'unsubscribed'=>$sequence->unsubscribed ?? null,
            'linear'=>$sequence->linear ?? null,
            'status'=>$sequence->status ?? null,

        ];
        return  response()->json([$data, 'status'=>200, 'message'=>'success',] );
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
