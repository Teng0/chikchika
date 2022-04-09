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

    public function store(Request $req)
    {

        $attributes = $req->validate(['body'=>'required|max:255']);
      if ($attributes){

          Chik::create([
              "user_id"=>auth()->user()->id,
              'body' => $req->input('body')
          ]);

          return redirect('dashboard');
      }



      //  return redirect('/dashboard');
    }
}
