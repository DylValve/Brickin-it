<?php

namespace App\Http\Controllers;

use Validator, Redirect, Response, File;
use App\Document;
use Illuminate\Http\Request;

class APIDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if($request->hasfile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file_name" => $filename
            ]);
        }

        // https://www.fundaofwebit.com/post/laravel-8-crud-with-image-upload-tutorial

        // https://www.tutsmake.com/laravel-file-upload-via-api-example-from-scratch/
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
