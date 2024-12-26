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
        $users = User::get();
        return view('file-upload', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        $request->validate([
            'photo' => 'required|mimes:jpg,jpeg,pdf,png|max:3000',
        ]);

        // $filename = time() . "_" . $file->getClientOriginalName();
        // $extention = $file->extention();
        // $path = $file->storeAs('images', $filename, 'public');
        $path = $file->store('images','public');
        // $path = $file->move(public_path('uploads'),$file->getClientOriginalName());

        //database insert
        User::create([
            'file_name' => $path,
        ]);

        return redirect()->route('user.index')->with('status', 'File has been uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('file-update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|mimes:jpg,jpeg,pdf,png|max:3000',
            ]);

            $image_path = public_path('storage/').$user->file_name;
            if(file_exists($image_path)){
              unlink($image_path);
            }

            $path = $request->file('photo')->store('images','public');
            // $path = $request->file('photo')->move('images','public');
            $user->update([
                'file_name' => $path,
            ]);
            return redirect()->route('user.index')->with('status', 'File has been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        $image_path = public_path('storage/').$user->file_name;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        return redirect()->route('user.index')->with('status', 'File has been deleted successfully');
    }
}
