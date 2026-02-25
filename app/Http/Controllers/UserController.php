<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name)
    {
        return view('user', [
            'user_id' => $id,
            'user_name' => $name,
            
        ]);
    }
}
