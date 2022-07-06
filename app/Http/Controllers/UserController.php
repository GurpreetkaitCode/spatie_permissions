<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all()->where('role', '!=', 0);
        return view('dashboard', compact('users'));
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->name.'@gmail.com';
        $user->role = $request->role;
        $user->description = $request->description;
        $user->save();
        $user->assignRole($user->role);
        return redirect()->route('dashboard');
    }
    public function update(Request $request)
    {
        User::where('id', $request->id)->update($request->all());
        return back();
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        User::where('id', $id)->delete();
        return back();
    }
}
