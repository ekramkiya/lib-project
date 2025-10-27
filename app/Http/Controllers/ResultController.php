<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
      public function print(Result $result)
    {
        return view('results.print', compact('result'));
    }
}
