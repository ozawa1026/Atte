<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function store()
  {
    return view('register');
  }
}