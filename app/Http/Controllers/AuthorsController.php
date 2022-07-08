<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
   public function index(){
    $data1 = Authors::all();
    return view('/authors',compact('data1'));

   }
}
