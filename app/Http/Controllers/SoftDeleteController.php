<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftDeleteController extends Controller
{
    public function trash()
    {
        $trash = \App\Models\User::withTrashed()->get();
        return view('users.trash', compact('trash'));
    }

    public function restore($id)
    {
        \App\Models\User::withTrashed()->where('id', $id)->restore();
        return redirect('/getDeteledUsers')->with('restore', 'The wanted soft-deleted user has been restored successfuly!');
    }

    public function forceDelete($id)
    {
        \App\Models\User::where('id', $id)->forceDelete();
        return redirect('/getDeteledUsers')->with('forceDelete', 'The wanted soft-deleted user has been force-deleted successfuly!');
    }
}