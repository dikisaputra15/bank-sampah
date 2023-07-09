<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function profile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return view('admin.profile');
    }

    public function adduser()
    {
        return view('admin.adduser');
    }

    public function storeuser(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type
        ]);

        return redirect('admin/user');
       
    }

    public function destroyusr($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('admin/user');
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view('admin.edituser', compact(['user']));
    }

    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
        $user->update($request->except(['_token','submit']));
        return redirect('admin/user');
    }

    public function changeuserpass($id)
    {
        $user = User::find($id);
        return view('admin.changeuserpass', compact(['user']));
    }

    public function updatepass(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        User::whereId($request->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('admin/user');

    }

    public function changeprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->update([
                'name' => Str::title($request->name),
                'email' => $request->email
        ]);

        return redirect('admin/profile')->with('alert-primary','Profile Updated');

    }

    public function saveprofile(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->update([
                'name' => Str::title($request->name),
                'email' => $request->email
        ]);

        return redirect('admin/profile');

    }
}
