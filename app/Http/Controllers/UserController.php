<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('users.list', compact('users'));
    }

    public function create()
    {
        return view('users.add');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
