<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contestants;

class HomeController extends Controller
{
    public function index(){
        return view('home', ['datas' => contestants::get()]);
    }
    public function email(Request $request){
        dd($request);
        return view('home');
    }
}
