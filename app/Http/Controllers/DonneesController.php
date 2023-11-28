<?php

namespace App\Http\Controllers;

use App\Models\donnees;
use App\Http\Requests\StoredonneesRequest;
use App\Http\Requests\UpdatedonneesRequest;

class DonneesController extends Controller
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
     * @param  \App\Http\Requests\StoredonneesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredonneesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function show(donnees $donnees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function edit(donnees $donnees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedonneesRequest  $request
     * @param  \App\Models\donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedonneesRequest $request, donnees $donnees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donnees  $donnees
     * @return \Illuminate\Http\Response
     */
    public function destroy(donnees $donnees)
    {
        //
    }
}
