<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mlabController extends Controller
{
    public function index(){
        $item = DB::select('select * from news');
        return view('hp.index', ['item' => $item]);
    }
}
