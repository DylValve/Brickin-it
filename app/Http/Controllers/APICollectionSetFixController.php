<?php

namespace App\Http\Controllers;

use App\Models\CollectionSetFix;
use App\Models\Set;
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
    public function show(string $cSFC)
    {
        $item = CollectionSetFix::where('id', $cSFC)->first();
        return response()->json($item, 200);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $cSFC)
    {
        $item = CollectionSetFix::where('id', $cSFC)->first();
        $item->delete();
        return response()->json(null, 204);
    }

    public function collectionSetSearch(string $collection_id)
    {
        $items = array();
        $collectionSets = CollectionSetFix::all();
        $sets = Set::all();
        $resultRelations = $collectionSets->where('collection_id', $collection_id);
        foreach ($resultRelations as $relation) {
            foreach ($sets as $set) {
                if ($relation->set_id == $set->id){
                    $items[] = $set;
                }
            }
        }
        return response()->json($items, 200);
    }
}
