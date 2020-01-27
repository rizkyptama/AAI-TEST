<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ViewsController extends Controller
{
    public function index(){
        $kiriman = ["title" => "Movies"];
        return view('dashboard', $kiriman);
    }

    public function tv(){
        $kiriman = ["title" => "Tv Shows"];
        return view('tv', $kiriman);
    }
}
