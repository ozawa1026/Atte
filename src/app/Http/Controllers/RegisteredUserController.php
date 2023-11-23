<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

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