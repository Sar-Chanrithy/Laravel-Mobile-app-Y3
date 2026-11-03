<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sum($a, $b)
    {
        $total = $a + $b;
        return view('sum', compact('total'));
    }
}

}