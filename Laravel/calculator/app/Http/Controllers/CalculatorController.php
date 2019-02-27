<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function index()
    {
        $result = null;
        return view('index', compact('result'));
    }
    public function add(Request $rq){
        $soA = $rq->soA;
        $soB = $rq->soB;
        $result= $soA + $soB ;
        return view('index', compact('result'));
    }
}
