<?php

namespace App\Http\Controllers;

use App\Models\Set;
use Illuminate\Http\Request;

class APISetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $set = Set::all();
        return response()->json($set, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'set_Name' => 'required|max:32',
                'set_Number' => 'required|max:200',
            ]

        );
        $set = Set::create($request->all());

        return response()->json($set, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Set $set)
    {
        return response()->json($set, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Set $set)
    {
        $this->validate(
            $request,
            [
                'set_Name' => 'required|max:32',
                'set_Number' => 'required|max:200',
            ]

        );
        $set->update($request->all());
        return response()->json($set, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Set $set)
    {
        $set->delete();
        return response()->json(null, 204);
    }

    public function apiSearchNumber(Set $set)
    {
        return response()->json($set, 200);
    }

    public function apiSearchName(Set $name)
    {
        return response()->json($name, 200);
    }
}
