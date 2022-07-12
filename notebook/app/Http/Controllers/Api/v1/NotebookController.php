<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\NotebookStoreRequest;
use App\Http\Resources\NotebookResource;
use App\Models\Notebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NotebookResource::collection(Notebook::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotebookStoreRequest $request)
    {
        $created_note = Notebook::create($request->validated());
        Log::info($request);
        return new NotebookResource($created_note);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notebook  $notebook)
    {
        return new NotebookResource($notebook);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NotebookStoreRequest $request, Notebook $notebook)
    {
        $notebook -> update($request->validated());
        return $notebook;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notebook $notebook)
    {
        $notebook -> delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
