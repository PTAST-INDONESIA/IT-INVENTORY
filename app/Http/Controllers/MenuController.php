<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
       /*  $menu = DB::select('CALL sp_get_menu(?)', ["getmenu|" . Auth::user()->name]);
        if (Auth::user()->role_code == "QRCP"){
            return view('ace/scan_document',['menu' => $menu]);
        }else{
    	    return view('ace/master',['menu' => $menu]);
        } */
       return view('main/main_form');
    }
}
