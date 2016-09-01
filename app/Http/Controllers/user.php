<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class user extends Controller
{
    //
    public function llist()
    {
            # code...
            $name='asmaa';
            return view('user.list')->with('name',$name);
    }
}
