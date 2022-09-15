<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
 public function index(){
    $name = "Pista";
    $email = "pista@gmail.com";
    return view ("templates.about", compact("name","email"));
 }
}
