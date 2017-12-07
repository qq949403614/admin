<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list()
    {
    	return view('home.list.list');
    }
}
