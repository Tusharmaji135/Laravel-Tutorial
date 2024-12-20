<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //Read all data
        $users = User::paginate(6);
        // $users = User::where([['name', 'Neha']], ['age', '>', 12])->get(); //multiple conditions
        return view("home", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view("adduser");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //normal assignment------------------------
        // $user = new User();

        // $user->name = $request->name;
        // $user->age = $request->age;
        // $user->email = $request->email;
        // $user->city = $request->city;

        // $user->save();

        //mass assignment-------------------------    to unlock it make gurded or fillabele in model
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'city' => 'required|alpha'
        ]);

        User::create([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'city' => $request->city,
        ]);
        return redirect()->route('user.index')->with('status', 'NEW USER ADDED SUCCESSFULLY');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        
        // $users = User::find($user);
        return view("viewuser",compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("updateuser",compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'city' => 'required|alpha'
        ]);

        $user ->update([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'city' => $request->city,
        ]);
        
        return redirect()->route('user.index')->with('status', 'USER UPDATED SUCCESSFULLY');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('status', 'USER DELETED SUCCESSFULLY');
        
    }
}
