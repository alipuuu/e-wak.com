<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $user = UserModel::all();
        return view('user.v_user', compact('user'));
    }

    public function add_user()
    {
        $userr = UserModel::all();
        return view('user.v_user', compact('user'));
    }

    public function insert(Request $request)
    {
        $user = UserModel::find($request->id);
        Request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'min:5|required_with:password_confirmation|same:password_confirmation',
        ],[
            'name.required'=>' name wajib diisi !!',
            'email.required'=>' email wajib diisi !!',
            'password.required' => 'password wajib diisi !!',
        ]);

        $user = [
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => Hash::make($request->password)
        ];
        $this->UserModel->addData($user);
        return redirect()->route('user')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function edit(Request $request)
    {
        $user = UserModel::find($request->id);
        // dd($request->all());
        $user->update($request->all());
        return redirect()->route('user')->with('pesan', 'Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect()->route('user');
    }

}



