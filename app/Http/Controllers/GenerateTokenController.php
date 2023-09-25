<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateTokenController extends Controller
{
    public function generateToken()
    {
        auth()->user()->createToken('user-token');

        return redirect()->back();
    }
}
