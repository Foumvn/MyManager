<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class menu extends Controller
{
  public function index()
  {
    return view('content.menu');
  }
}
