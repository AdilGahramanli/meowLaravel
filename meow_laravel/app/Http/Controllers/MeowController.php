<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    //
    function datas() {
        
        return "liste des messages";
    }

    function datasById($id) {
        return "liste des messges pr l'id" . $id;
    }

}
