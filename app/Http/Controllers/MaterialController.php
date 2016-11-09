<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Materials;
use App\Http\Requests;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Materials::all();

        // load the view and pass the types
        return View('materials.materials')
            ->with('materials', $materials);
    }


    public function create()
    {
        return View('materials.create');
    }


    public function store(Request $request)
    {
        materials::create($request->all());

        return redirect('materials');
    }


    public function show($id)
    {
        $materials = Materials::find($id);

        return View('materials.show')
            ->with('materials', $materials);
    }


    public function edit($id)
    {
        $materials = Materials::find($id);

        return View('materials.edit')
            ->with('materials', $materials);
    }


    public function update(Request $request, $id)
    {
        $materials = Materials::find($id);
        $materials->amount      = Request::get('amount');
        $materials->save();
        return Redirect('materials');
    }

    
    public function destroy($id)
    {
        $materials = Materials::find($id);
        $materials->delete();

        // redirect
        return Redirect ('materials');
    }
}
