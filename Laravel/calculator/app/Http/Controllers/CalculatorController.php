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
    public function calculate(Request $rq){
        $soA = $rq->soA;
        $soB = $rq->soB;
        $pheptoan = $rq->pheptoan;
        switch ($pheptoan){
            case 'Addition(+)':
                $result= $soA + $soB ;
                break;
            case 'Subtraction(-)':
                $result= $soA - $soB ;
                break;
            case 'Multiplication(*)':
                $result= $soA * $soB ;
                break;
            case 'Division(/)':
                if ($soB == 0){
                    $result= "Division by zero!";
                }
                else{
                    $result= $soA / $soB ;
                }
        }
        return view('index', compact('result'));
    }
}
