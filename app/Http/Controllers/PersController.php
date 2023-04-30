<?php

namespace App\Http\Controllers;

use App\Models\Pers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\PersRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\PersResource;
use App\Http\Resources\PersCollection;

class PersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pers = Pers::with('title', 'status')->get();
        return new PersCollection($pers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('photo');
        }

        $per = Pers::create($data);

        return response()->json([
            'message' => 'Pers has been created successfully',
            'pers' => new PersResource($per),
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($per)
    {
        $pers = Pers::with('title', 'status')->findOrFail($per);
        return new PersResource($pers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersRequest $request, Pers $per) //update data, method: patch
    {
        $data = $request->validated();

        $per->update($data);

        return response()->json([
            'message' => 'Data has been updated successfully.',
            'pers' => new PersResource($per),
        ], 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pers $per)
    {
        $per->delete();

        return response()->json([null, Response::HTTP_NO_CONTENT], 204);
    }
}
