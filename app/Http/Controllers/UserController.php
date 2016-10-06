<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exception;
use Symfony\Component\CssSelector\Exception\ExpressionErrorException;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(){
        $user = Auth::user(); // select * from students
        // meegeven aan view
        $userData['userData'] = $user;
        return view('user/account')->with($userData);
    }

    // change password

    public function updatePassword(Request $request){

        $user = Auth::user();
        $newPassword = $request->input('password');
        if(empty($newPassword)){
            $feedback = "error";
            $message = "Nieuw wachtwoord kan niet leeg zijn.";
        }else{
            $feedback = "success";
            $message = "Uw wachtwoord is gewijzigd";
            $user->password = bcrypt($newPassword);
            $user->save();


        }


        return redirect('/account')->with($feedback, $message);

    }

    // change profile picture

    public function changeProfilePicture(Request $request)
    {

        $pictureSelected = array(
            'profile_picture' => 'required',
        );
        $requiredValidation = Validator::make($request->all(), $pictureSelected);

        $validPicture = array(
            'profile_picture' => 'mimes:jpeg,jpg,png',
        );
        

        if ($requiredValidation->fails()) {
            $feedback = "error";
            $message = "Geen foto geselecteerd";
        } else
        if ($request->hasFile('profile_picture')) {
            $newProfilePic = $request->file('profile_picture');

            $imageValidation = Validator::make($request->all(), $validPicture);

            if($imageValidation->fails()) {
                $feedback = "error";
                $message = "Het geselecteerde bestand is geen geldige foto.";
            } else {
                $user = Auth::user();
                $filename = time() . '.' . $newProfilePic->getClientOriginalExtension();
                Image::make($newProfilePic)->save(base_path('public/img/profilePictures/' . $filename));
                $user->profile_picture = $filename;
                $user->save();
                $feedback = "success";
                $message = "Profielfoto is gewijzigd";

            }

        }
        return redirect('/account')->with($feedback, $message);

    }

    public function updateNotificationSettings(Request $request){

        $user = Auth::user();
        $value = $request->input('get_notifications');
        if($value == "checked"){
            $user->get_notifications = true;
            $feedback = "success";
            $message = "U ontvang nu notificaties.";
        }else{
            $user->get_notifications = false;
            $feedback = "success";
            $message = "U ontvang geen notificaties meer.";
        }
        $user->save();
        return redirect('/account')->with($feedback, $message);

    }
}
