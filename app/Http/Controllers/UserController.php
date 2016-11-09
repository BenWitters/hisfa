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
    // account page
    public function index(){
        // get the current user
        $user = Auth::user();
        // meegeven aan view
        $userData['userData'] = $user;
        return view('user/account')->with($userData);
    }

    // change password
    public function updatePassword(Request $request){
        $user = Auth::user();
        // get password input value
        $newPassword = $request->input('password');

        // error validation if the password field is empty and the html validation doesn't work
        if(empty($newPassword)){
            $feedback = "error";
            $message = "Nieuw wachtwoord kan niet leeg zijn.";
        }else{
            $feedback = "success";
            $message = "Uw wachtwoord is gewijzigd";
            // change password of the logged in user
            $user->password = bcrypt($newPassword);
            //update user data in database
            $user->save();
        }
        return redirect('/account')->with($feedback, $message);

    }

    public function showProfile(Request $request){

        return redirect('/account');

    }

    // change profile picture
    public function changeProfilePicture(Request $request){

        //rules
        $pictureSelected = array(
            'profile_picture' => 'required',
        );
        $requiredValidation = Validator::make($request->all(), $pictureSelected);

        $validPicture = array(
            'profile_picture' => 'mimes:jpeg,jpg,png',
        );
        
        // if the user hasn't selected a photo
        if ($requiredValidation->fails()) {
            $feedback = "error";
            $message = "Geen foto geselecteerd";
        } else
        if ($request->hasFile('profile_picture')) {
            // get the file that was selected
            $newProfilePic = $request->file('profile_picture');

            // check if the file is an image
            $imageValidation = Validator::make($request->all(), $validPicture);

            if($imageValidation->fails()) {
                $feedback = "error";
                $message = "Het geselecteerde bestand is geen geldige foto.";
            } else {
                $user = Auth::user();
                // create unique name for new image
                $filename = time() . '.' . $newProfilePic->getClientOriginalExtension();

                // save the image to folder
                Image::make($newProfilePic)->save(base_path('public/img/profilePictures/' . $filename));

                // save the image to the database
                $user->profile_picture = $filename;
                $user->save();
                $feedback = "success";
                $message = "Profielfoto is gewijzigd";

            }

        }
        return redirect('/account')->with($feedback, $message);

    }

    // update notification settings from waste and prime silos
    public function updateNotificationSettings(Request $request){

        $user = Auth::user();
        $valuePrime = $request->input('get_notifications_prime');

        // check if prime notification checkbox is checked or not
        if($valuePrime == "checkPrime"){
            $user->get_notifications_prime = true;
            $feedback = "success";
            $message = "Uw notificatie settings zijn aangepast.";
        }else{
            $user->get_notifications_prime = false;
            $feedback = "success";
            $message = "Uw notificatie settings zijn aangepast.";
        }
        $user->save();

        // check if prime notification is checked or not
        $valueWaste = $request->input('get_notifications_waste');
        if($valueWaste == "checkWaste"){
            $user->get_notifications_waste = true;
            $feedback = "success";
            $message = "Uw notificatie settings zijn aangepast.";

        }else{
            $user->get_notifications_waste = false;
            $feedback = "success";
            $message = "Uw notificatie settings zijn aangepast.";
        }
        $user->save();

        return redirect('/account')->with($feedback, $message);

    }
}
