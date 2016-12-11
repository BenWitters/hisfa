<?php

namespace App\Http\Controllers;

use Input;
use Intervention\Image\Facades\Image;
use App\Materialtypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exception;
use Symfony\Component\CssSelector\Exception\ExpressionErrorException;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

class MaterialTypeController extends Controller
{
    public function index()
    {
        // get all the types
        $materialtypes = Materialtypes::all();

        // load the view and pass the types
        return View('materialtypes.materialtypes')
            ->with('materialtypes', $materialtypes);
    }


    public function create()
    {
        return View('materialtypes.create');
    }


    public function store(Requests\CreateMaterialType $request)
        // een request aanmaken zodat je weet welke velden ingevuld moeten zijn!
    {
        // vraagt alles -> enkel welke fillable zijn (in model)
        materialtypes::create($request->all());
        return redirect('materialtypes');
    }

    public function addPhoto(Request $request, $id){
        //rules
        $pictureSelected = array(
            'material_type_picture' => 'required',
        );
        $requiredValidation = Validator::make($request->all(), $pictureSelected);
        $validPicture = array(
            'material_type_picture' => 'mimes:jpeg,jpg,png',
        );
        // if the user hasn't selected a photo
        if ($requiredValidation->fails()) {
            $feedback = "error";
            $message = "Geen foto geselecteerd";
        } else
            if ($request->hasFile('material_type_picture')) {
                // get the file that was selected
                $newMaterialPic = $request->file('material_type_picture');
                // check if the file is an image
                $imageValidation = Validator::make($request->all(), $validPicture);
                if($imageValidation->fails()) {
                    $feedback = "error";
                    $message = "Het geselecteerde bestand is geen geldige foto.";
                } else {
                    // create unique name for new image
                    $filename = time() . '.' . $newMaterialPic->getClientOriginalExtension();
                    // save the image to folder
                    Image::make($newMaterialPic)->save(base_path('public/img/grondstoffen/' . $filename));
                    // save the image to the database
                    $materialtypes = Materialtypes::find($id);
                    $materialtypes->material_type_picture      = $filename;
                    $materialtypes->save();
                    $feedback = "success";
                    $message = "Materialfoto is gewijzigd";
                }
            }
        return redirect('/materialtypes')->with($feedback, $message);
    }

    public function photo($id)
    {
        $materialtypes = Materialtypes::find($id);
        return View('materialtypes.photo')
            ->with('materialtypes', $materialtypes);
    }


    public function show($id)
    {
        $materialtypes = Materialtypes::find($id);

        return View('materialtypes.show')
            ->with('materialtypes', $materialtypes);
    }

    public function edit($id)
    {
        $materialtypes = Materialtypes::find($id);

        return View('materialtypes.edit')
            ->with('materialtypes', $materialtypes);
    }


    public function update(Request $request, $id)
    {
        // store
        $materialtypes = Materialtypes::find($id);
        $materialtypes->material_type_name      = $request->get('material_type_name');
        $materialtypes->amount = $request->get('amount');
        $materialtypes->save();
        return Redirect('materialtypes');

        $blocktypes = Blocktypes::find($id);
        $blocktypes->block_type_name      = $request->get('block_type_name');
        $blocktypes->save();
        return Redirect('blocktypes');


    }

    public function destroy($id)
    {
        $materialtypes = Materialtypes::find($id);
        $materialtypes->delete();

        // redirect
        return Redirect ('materialtypes');
    }

    public function addOctabin($id)
    {
        /*$materialtype = Materialtypes::find($id);
        $materialtype->increment('amount');

        // redirect
        return Redirect ('materialtypes');*/

        $materialtype = Materialtypes::find($id);
        $materialtype->increment('amount');

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function deleteOctabin($id)
    {
        $materialtype = Materialtypes::find($id);
        if ($materialtype->amount > 0) {
            $materialtype->decrement('amount');
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }

        // redirect
        //return Redirect ('materialtypes');
    }


}
