<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Travel;

class TravelController extends Controller

{
    function index(){

        $travels = Travel::all();

        return view('welcome', compact('travels'));
    }
}
