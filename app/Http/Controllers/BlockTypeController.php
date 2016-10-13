<?php

namespace App\Http\Controllers;

use App\Blocktypes;
use Request;
use Input;

use App\Http\Requests;

class BlockTypeController extends Controller {

    public function index()
    {
        // get all the types
        $blocktypes = Blocktypes::all();

        // load the view and pass the types
        return View('blocktypes.blocktypes')
            ->with('blocktypes', $blocktypes);
    }


    public function create()
    {
        return View('blocktypes.create');
    }


    public function store(Requests\CreateBlockType $request)
        // een request aanmaken zodat je weet welke velden ingevuld moeten zijn!
    {
        // vraagt alles -> enkel welke fillable zijn (in model)
        blocktypes::create($request->all());

        return redirect('blocktypes');
    }

    public function show($id)
    {
        // get the blocktype
        $blocktypes = Blocktypes::find($id);

        // show the view and pass the blocktype to it
        return View('blocktypes.show')
            ->with('blocktypes', $blocktypes);
    }

    public function edit($id)
    {
        // get the blocktype
        $blocktypes = Blocktypes::find($id);

        // show the edit form and pass the blocktype
        return View('blocktypes.edit')
            ->with('blocktypes', $blocktypes);
    }


    public function update($id)
    {
            // store
            $blocktypes = Blocktypes::find($id);
            $blocktypes->block_type_name      = Request::get('block_type_name');
            $blocktypes->save();
            return Redirect('blocktypes');
    }

    public function destroy($id)
    {
        $blocktypes = Blocktypes::find($id);
        $blocktypes->delete();

        // redirect
        return Redirect ('blocktypes');
    }

}
