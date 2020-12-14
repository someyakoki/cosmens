<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CosmeController extends Controller
{
    public function index() {
        $cosme = Items::all();
        return view('item.index',['items'=> $items]);
    }
}
