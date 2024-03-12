<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\vue2;



class Controller2 extends Controller
{
    //
    function getDataByIndex($index) {
    $data = [
        [
            "id" => 1,
            "name" => "Produit 1",
            "description" => "Ceci est le produit 1"
        ],
        [
            "id" => 2,
            "name" => "Produit 2",
            "description" => "Ceci est le produit 2"
        ]
        ];
    return view('vue2', $data[$index]);
    }
}
