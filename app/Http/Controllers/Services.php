<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Services extends Controller
{
    public function index($id = null,$name =null){
        echo "ID ".$id . " Name ".$name;
        return view('services');
    }
}
