<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if (auth()->user()->role == 1) {
            $users = User::get();
        } else {
            $users = User::whereId(auth()->user()->id)->get();
        }
        

        return view('back.user.index', [
            'users' => $users
        ]);
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return back()->with('success','Pengguna Sudah Ditambahkan!');
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $data = $request->validated();
    
        if ($request->has('password') && $request->input('password') != '') {
            $data['password'] = bcrypt($data['password']);
        }
    
        $user = User::findOrFail($id); // Use findOrFail to throw a ModelNotFoundException if the user with the given ID is not found
        $user->update([
            'name' => $data['name'], // Use $data array instead of $request->name and $request->email
            'email' => $data['email'],
            'password' => $data['password'] ?? $user->password, // Use ?? operator to maintain existing password if it's not being updated
        ]);
    
        return back()->with('success', 'Pengguna Sudah Diedit!');
    }    


    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('success','Pengguna Sudah Dihapus!');
    }
}
