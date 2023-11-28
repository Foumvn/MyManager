<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ajouter extends Controller
{
  public function liste()
  {
    return view('content.ajouter');
  }
}