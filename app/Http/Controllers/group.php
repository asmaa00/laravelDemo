<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class group extends Controller
{
    //
    public function llist()
    {
            # code...
            $group = 'HR';
            return view('group.list')->with('group',$group);
    }
}
