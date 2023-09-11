<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

class crudcontroller extends Controller
{
    // function view(){
    //     return view('crud.form');
    // }



    function create(request $req){
        $crud = new crud ;
        $crud->name =$req->name;
        $crud->age =$req->age;
        $crud->contact =$req->contact;
        $crud->save();
        return redirect('/read');
    }
    function update(request $req){
        
        $id =$req->id;
        $name =$req->get('name');
        $age =$req->get('age');
        $contact =$req->get('contact');
        $crud=Crud::find($id);
        $crud->name=$name;
        $crud->age=$age;
        $crud->contact=$contact;
        $crud->save();
        return redirect('/read');
    }
    function read(){
        $data = crud::all();
        return view('crud.read',['data'=>$data]);
    }
    function updatedelete(Request $req){
        $id =$req->get('id');
        $name=$req->get('name');
        $age=$req->get('age');
        $contact=$req->get('contact');
        if($req->get('delete')=='Delete'){
            $crud=crud::find($id);
            $crud->delete();
        }else{
            return view('crud.update',['id'=>$id,'name'=>$name,'age'=>$age,'contact'=>$contact]);
        }
        return redirect('read');
    }
}
