<?php

namespace App\Http\Controllers;

use App\Models\User;

class Controller
{
    function index()
    {
        $users = User::all();
        return response()->json(['status'=>200, "data"=>$users]);
    }
}
