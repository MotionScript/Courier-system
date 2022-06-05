<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{
    //update admin profile
    public function UpdateAdminProfile(Request $request, $id){
        User::findOrFail($id)->update([
           'name' => $request->name,
           'email' => $request->email,
        ]);
        $notification = array(
            'message' => 'Profile Updated successfully',
            'alert-type' => 'success' );
            return redirect()->back()->with($notification);
    }

//update admin password
public function UpdateAdminPassword(Request $request, $id){
    $request->validate([
        'cpass' => 'required',
        'password' => 'required|confirmed', 'min:5',],[
        'cpass.required' => 'Pls. Enter Old Password',
        'password.required' => 'Pls. Enter New Password',


        ]);//end validation

$hashedPassword = Auth::user()->password;
if(Hash::check($request->cpass, $hashedPassword)){
    User::findorFail($id)->update([
    'password' => Hash::make($request->password),
    ]);
    $notification = array(
        'message' => 'Password Updated Successfully',
        'alert-type' => 'success' );
        return redirect()->back()->with($notification);

    }else{
        $notification = array(
            'message' => 'Current Password Not Match',
            'alert-type' => 'error' );
            return redirect()->back()->with($notification);
    }







}















}
