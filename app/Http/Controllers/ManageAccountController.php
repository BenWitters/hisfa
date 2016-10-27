<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ManageAccountController extends Controller
{
    public function index(){
        $allUsers = User::all();
        $userData['users'] = $allUsers;
        return view('manageaccount/overview', $userData);
    }
    public function indexAddAccount()
    {
       return view('manageaccount/add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->is_admin = 0;
        $user->get_notifications_prime = 0;
        $user->get_notifications_waste = 0;
        $user->can_view_dashboard = 1;
        $user->can_view_blocks = 1;
        $user->can_update_blocks = 1;
        $user->can_view_waste = 1;
        $user->can_update_waste = 1;
        $user->can_view_prime = 1;
        $user->can_update_prime = 1;
        $user->save();
        return redirect('/manageaccounts/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $userData['user'] = $user;
        return view('manageaccount/show', $userData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);

        $canViewDashboard = $request->input('get_notifications_prime');
        $canViewBlocks = $request->input('can_view_blocks');
        $canUpdateBlocks = $request->input('can_update_blocks');
        $canViewWaste = $request->input('can_view_waste');
        $canUpdateWaste = $request->input('can_update_waste');
        $canViewPrime = $request->input('can_view_prime');
        $canUpdatePrime = $request->input('can_update_prime');
        $isAdmin = $request->input('is_admin');

        // check if view dashboard is checked or not
        if($canViewDashboard == "viewDashboard"){
            $user->can_view_dashboard = true;
        }else{
            $user->can_view_dashboard = false;
        }
        $user->save();

        // check if view blocks is check or or not
        if($canViewBlocks == "viewBlocks"){
            $user->can_view_blocks = true;
        }else{
            $user->can_view_blocks = false;
        }
        $user->save();

        // check if update blocks is check or or not
        if($canUpdateBlocks == "updateBlocks"){
            $user->can_update_blocks = true;
        }else{
            $user->can_update_blocks = false;
        }
        $user->save();

        // check if view waste is check or or not
        if($canViewWaste == "viewWaste"){
            $user->can_view_waste = true;
        }else{
            $user->can_view_waste = false;
        }
        $user->save();

        // check if update waste is check or or not
        if($canUpdateWaste == "updateWaste"){
            $user->can_update_waste = true;
        }else{
            $user->can_update_waste = false;
        }
        $user->save();

        // check if view prime is check or or not
        if($canViewPrime == "viewPrime"){
            $user->can_view_prime = true;
        }else{
            $user->can_view_prime = false;
        }
        $user->save();

        // check if update prime is check or or not
        if($canUpdatePrime == "updatePrime"){
            $user->can_update_prime = true;
        }else{
            $user->can_update_prime = false;
        }
        $user->save();

        // check if view prime is check or or not
        if($isAdmin == "isAdmin"){
            $user->is_admin = true;
        }else{
            $user->is_admin = false;
        }
        $user->save();

        return redirect('/manageaccounts/' . $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
