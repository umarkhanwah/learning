<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fav;
use App\Models\history;
class favController extends Controller
{
    public function index(){
        return view("fav.cards");
    }
    public function Add(Request $req){
       $add = new Fav;
       $add->title = $req->title;
       $add->save();
       return redirect('fav');
    }
    public function history(Request $req){
       $add = new history;
       $add->title = $req->title;
       $add->save();
       return redirect('fav');
    }
}
