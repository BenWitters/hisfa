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
        $datablocktypes['allBlocktypes'] = $blocktypes;
        $blocks = Block::all();
        $datablock['allBlock'] = $blocks;


        return View('blocks/blocks', $datablock, $datablocktypes);
    }

    public function show($id){

        $blocktypes = Blocktypes::find($id);
        $blocks = Block::where('block_type_id',$id)->get();

        return View('blocks/detail', array("blocktype" => $blocktypes, "allBlock" => $blocks->toArray()));

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

    public function addBlock(Request $request)
    {
        $length = $request->input('length');
        $blockTypeId = $request->input('blocktypeId');
        $amount = $request->input('amount');
        Block::where([['block_type_id', '=', $blockTypeId], ['length', '=', $length]])->update(array('amount' => $amount+1));
        return Redirect('blocks');
    }

    public function removeBlock(Request $request)
    {
        $length = $request->input('length');
        $blockTypeId = $request->input('blocktypeId');
        $amount = $request->input('amount');
        if($amount > 0){
            Block::where([['block_type_id', '=', $blockTypeId], ['length', '=', $length]])->update(array('amount' => $amount-1));
        }
        return Redirect('blocks');
    }
}
