<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class UserController extends Controller
{
    public function index()
    {

        return view('users.index');
    }

    public function search(Request $request)
    {
        // $user = User::find($request->input('user_id'));

        try {
            $user = User::findOrFail($request->input('user_id'));
        } catch (ModelNotFoundException $exception) {
            return back()->withError('User not found by ID ' . $request->input('user_id'))->withInput();
        }

        return view('users.search', compact('user'));
    }

}
