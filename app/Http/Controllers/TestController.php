<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function greetings(){

        $products = Test::all();

        $compact = compact('products');

        return view('test', $compact);
    }
}
