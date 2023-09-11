<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\Students;

class studentController extends Controller
{
    function getdata(){
        return view('students');
    }
    function postdata(Request $req){
        $std = new Students;
        $std->name = $req->name;
        $std->save();
        // return redirect('stdview/');
        $std = Students::all();
        return view('studentsview',['data'=>$std]);
        
    }
    function viewdata(){
        $std = Students::all();
        return view('studentsview',['data'=>$std]);
    }
    function update(Request $req){
        $id = $req->get('id');
        $name = $req->get('name');
        $std = Students::find($id);
        $std->name=$name;
        $std->save();
        return redirect('stdview');
    }
    function updatedelete(Request $req){
        $id = $req->get('id');
        $name = $req->get('name');
        if($req->get('update')=='Update'){
            return view('updateview',['id'=>$id,'name'=>$name]);
        }
        else{
            $std = Students::find($id);
            $std->delete();
        }
        return redirect('/stdview');
    }
}
