<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients;

class liste extends Controller
{
  public function index()
  {
    $client= clients::all();

    return view('content.liste', compact('client'));
  }
}
