<?php

namespace App\Http\Controllers;

use App\Models\users\UploadDocument;
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
        $fred='fred';

       dd( UploadDocument($fred,$fred,$fred) );
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
    public function DocumentUpload()
    {
        $fred='fred';

       dd( UploadDocument($fred,$fred,$fred) );
       }

    public function AudioUpload()
    {
        //
    }

    public function PersonnelUpload()
    {
        //
    }

    public function ImageUpload()
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
    public function delete(users $users)
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
