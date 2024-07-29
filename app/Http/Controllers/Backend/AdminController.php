<?php

namespace App\Http\Controllers\Backend;

use Artisan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Backend.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        Artisan::call('cache:clear');
        return redirect()->route('login');
    }
    public function profile()
    {
        $admin =  Auth::user();
        return view('Backend.profile', compact('admin'));
    }

    public function profileUpdate(ProfileUpdateRequest $request, $id)
    {
        $user = User::find($id);

        if($request->image){
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('storage/uploads/profile_images'), $imageName);
            $user->image = $imageName;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->save();
        
        return redirect()->route('dashboard')->with('Profile Updated Successfully');

    }
}
