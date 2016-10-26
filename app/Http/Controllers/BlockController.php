<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blocktypes;
use App\Block;
use App\Http\Requests;

class BlockController extends Controller
{
    
    public function index(){

        $blocktypes = Blocktypes::all();

        return View('blocks/blocks')->with('blocktypes', $blocktypes);
    }
    
    
    // add length per type
    public function addLength(Request $request){
        $newLength = $request->input('length');
        $blockTypeId = $request->input('blockTypeId');
        $blocks = new Block();

        $blocks->length = $newLength;
        $blocks->amount = 0;
        $blocks->block_type_id = $blockTypeId;
        $blocks->save();
        return Redirect('blocks');

    }
}
