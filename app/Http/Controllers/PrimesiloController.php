<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class PrimesiloController extends Controller
{
    public function index(){
        $allPrimesilos = \App\Primesilo::all(); // select * from primesilos
        $primesilosData['primesilosData'] = $allPrimesilos;

        return view('silos/silos')->with($primesilosData);
    }

    public function delete($id){
        //DB::table('primesilos')->where('id',$id)->delete();
        //return Redirect::route('silos');
        \App\Primesilo::destroy($id);
        return Redirect::back();
    }
}
