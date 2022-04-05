<?php

namespace App\Http\Controllers;

use App\Models\Chik;
use Illuminate\Http\Request;

class ChikController extends Controller
{
    public function index(){



        return view('dashboard',[
            'chiks' => auth()->user()->timeline()
        ]);
    }
}
