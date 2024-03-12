<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    //
    function datas() {
        
        return view('meows-list',['meowList'=>"liste des messages envoyée par controller"]);
    }

    function datasById($id) {
        return view('meow-details',['details'=>"liste des messges par l'id " . $id]);
    }

}
