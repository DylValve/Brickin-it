<?php

namespace App\Http\Controllers;

use App\Models\CollectionSetFix;
use Illuminate\Http\Request;

class APICollectionSetFixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cSFC = CollectionSetFix::all();
        return response()->json($cSFC, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cSFC = CollectionSetFix::create($request->all());
        return response()->json($cSFC, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CollectionSetFix $cSFC)
    {
        return response()->json($cSFC, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionSetFix $cSFC)
    {
        $cSFC->update($request->all());
        return response()->json($cSFC, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CollectionSetFix $cSFC)
    {
        $cSFC->delete();
        return response()->json(null, 204);
    }
}
