<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $filteredUsers = \App\Models\User::where('name', 'like', '%john%')->get();
        return view('users.filter', compact('filteredUsers'));
    }
}