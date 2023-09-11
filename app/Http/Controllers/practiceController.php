<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\practice;

class practiceController extends Controller
{
    function create(){
        return view('practice.form');
    }
    function store(Request $req){
        $practice = new practice;
        $practice->name = $req->name;
        $practice->save();
        return redirect('/prc');
    }
    function index(){
        $practice = practice::all();
        return view('practice.index',['data'=>$practice]);
    }
    function edit(){
        // $practice = practice::all();
        return view('practice.update',['data'=>$practice]);
    }
}
