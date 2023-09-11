<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Project::all();
        return view('project.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('project.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required | image ',
            'description'=>'required | min:20',
        ]);
        $input = $request->all();
        if($image = $request->file('image')){
            $location = "images/";
            $location = "images/";
            $profileimage = date('YmdHis') . "." . $image->extension();
            $image->move($location,$profileimage);
            $input['image']="$profileimage";
        }
        Project::create($input);

        return redirect('prj');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
       $project->all();
       return view('project.edit' , compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required | image ',
            'description'=>'required | min:20',
        ]);
        $input = $request->all();
        if($image = $request->file('image')){
            $location = "images/";
            $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($location,$profileimage);
            $input['image']="$profileimage";
        }
        $project->update($input);

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
