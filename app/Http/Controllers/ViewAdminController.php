<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAdminController extends Controller
{
    public function estadistics() {
        $caso = 0;
        return view('admin',compact('caso'));
    }
    public function users() {
        $caso = 1;
        return view('admin',compact('caso'));
    }
    public function activities() {
        $caso = 2;
        return view('admin',compact('caso'));
    }
    public function events() {
        $caso = 3;
        return view('admin',compact('caso'));
    }

    public function sites() {
        $caso = 4;
        return view('admin',compact('caso'));
    }

}
