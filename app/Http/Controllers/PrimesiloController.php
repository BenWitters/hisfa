<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Primesilo;
use App\Materialtypes;



class PrimesiloController extends Controller
{

    public function index()
    {
//        $allPrimesilos = \App\Primesilo::all(); // select * from primesilos
//        $primesilosData['primesilosData'] = $allPrimesilos;
//
//        return view('silos/silos')->with($primesilosData);

        // $primesilo = Primesilo::all();
        $primesilo = Primesilo::with('material')->get();
        return View('silos/silos')
            ->with('primesilo', $primesilo);
    }


    public function create()
    {
        return View('primesilo.create');
    }


    public function store(Requests\CreatePrimesilo $request)

    {
        // vraagt alles -> enkel welke fillable zijn (in model)
        Primesilo::create($request->all());
        return redirect('silos/silos');
    }

    public function show($id)
    {
        $primesilo = Primesilo::find($id);

        return View('primesilo.show')
            ->with('primesilo', $primesilo);
    }

    public function edit($id)
    {
        $primesilo = primesilo::find($id);
        $materials = Materialtypes::pluck('material_type_name', 'id');

        return View('primesilo.edit')
            ->with(array("primesilo" => $primesilo, 'materials' => $materials->toArray()));
    }


    public function update($id)
    {

        $primesilo = Primesilo::find($id);
        $primesilo->prime_silo_number      = Request::get('prime_silo_number');
        $primesilo->prime_full_percentage      = Request::get('prime_full_percentage');
        $primesilo->material_id      = Request::get('prime_material_id');
        $primesilo->save();
        return Redirect('primesilo');
    }


    public function destroy($id)
    {
//        DB::table('primesilos')->where('id',$id)->delete();
//        return Redirect::route('silos');
//        \App\Primesilo::destroy($id);
//        return Redirect::back();


        $primesilo = Primesilo::find($id);
        $primesilo->delete();

        // redirect
        return Redirect ('primesilo');
    }
}
