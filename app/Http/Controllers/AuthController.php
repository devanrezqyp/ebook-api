<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119052,
        'name' => 'Devan Rezqy Prastama ',
        'gender' => 'Male',
        'phone' => '082325639114',
        'class' => 'XII RPL 2'];
  }
}