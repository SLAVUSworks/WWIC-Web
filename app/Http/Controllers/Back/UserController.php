<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

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

    public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-online' . $user->id))
                echo $user->name . " is online. <br>";
            else
                echo $user->name . " is offline <br>";
        }
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
        
        $request->validate([
            // Other validation rules
            'avatar' => 'nullable|image|max:512', // Adjusted validation rules for avatar
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            
            // Validate file type
            $allowedFileTypes = ['jpeg', 'jpg', 'png', 'gif'];
            $extension = $avatar->getClientOriginalExtension();
            
            if (!in_array($extension, $allowedFileTypes)) {
                return back()->withErrors(['avatar' => 'The avatar must be an image (JPEG, JPG, PNG, GIF).'])->withInput();
            }
            
            // If validation passes, move the file to the desired location
            $avatarPath = $avatar->store('avatars', 'public');
            $data['avatar'] = $avatarPath;
        }

        if ($request->has('password') && $request->input('password') != '') {
            $data['password'] = bcrypt($data['password']);
        }
        
        $user = User::findOrFail($id);
        
        // Log data to debug
        Log::info('Data before update:', $data);
        
        $user->update([
            'nickname' => $data['nickname'],
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => $data['password'] ?? $user->password,
            'avatar' => $data['avatar'] ?? $user->avatar, // Use ?? operator to maintain existing avatar if it's not being updated
        ]);

        // Log updated user
        Log::info('Updated user:', $user->toArray());

        return back()->with('success', 'Pengguna Sudah Diedit!');
    }

    public function show()
    {
        return view('back.user.show', [
            'user' => User::whereId(auth()->user()->id)->get()
        ]);
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('success','Pengguna Sudah Dihapus!');
    }
}
