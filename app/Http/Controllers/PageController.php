<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        //welcome  
        return view('welcome');
    }

    public function user($id)
    {
        //welcome  
        if ($id > 90) {
            return 'Maggiore di 90 ' . $id;
        } else {
            return 'Minore di 90 ' . $id;
        }
    }
}
