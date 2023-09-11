<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basicController extends Controller
{
    // public function first(){
    //     return view('first');
    // }
    public function getdata(){
        return  view('form');
    }
    public function setdata(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required | email',
            'age'=>'required | numeric | min:18 | max:60',
            'contact'=>'required | numeric | digits: 11',
            'password'=>'required | confirmed'
        ]);
        return $req->input();
    }
}
