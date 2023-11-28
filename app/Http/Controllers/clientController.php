<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class clientController extends Controller
{
    public function ajouter(Request $request){

        $request->validate([
            'nom' =>'required',
            'project' =>'required',
            'numero' =>'required',

        ]);

        $client=new clients();
        $client->nom = $request->nom;
        $client->project = $request->project;
        $client->numero = $request->numero;


        $client->save();
        return view('content.ajouter')->with('success','Enregistre avec success');

    }

    public function liste()
  {
    $client= clients::all();

    return view('content.liste', compact('client'));
  }

  public function delete($id){

    $client= clients::find($id);
    $client->delete();
    $client= clients::all();

      return view('content.liste',compact('client'))->with('success','Enregistre avec success');

  }

    
}
