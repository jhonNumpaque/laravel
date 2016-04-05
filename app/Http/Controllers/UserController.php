<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{

    public function index()
    {
    	$users = User::paginate(10);
    	return view('users.index', compact('users'));
    }

    public function destroy(Request $request, $id)
    {
        if ($request->ajax())
        {
            User::find($id)->delete();
            return response()->json("Se ha eliminado con exito!");
        }
    }
}
