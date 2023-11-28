<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Http\Requests\StoreusersRequest;
use App\Http\Requests\UpdateusersRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DocumentIndex()
    {
        return view('content.donnees.documents');
    }

    public function AudioIndex()
    {
        return view('content.donnees.audios');
    }

    public function ImageIndex()
    {
        return view('content.donnees.images');
    }

    public function PersonnelIndex()
    {
        return view('content.donnees.personnels');
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
     * @param  \App\Http\Requests\StoreusersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreusersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateusersRequest  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateusersRequest $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        //
    }
}
