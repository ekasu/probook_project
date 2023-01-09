<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Controller
{
    public function updatePassword(Request $request)
    {
        // Validation
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed|min:8'

        ]);


        // Match The Old Password
        if (!Hash::check($request->oldpassword, auth()->user()->password)) {
            return back()->with("error1", "Old Password is incorrect!");
        }


        // update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect(route('user-management'))->with("success", "Password changed successfully!");
    }
}
