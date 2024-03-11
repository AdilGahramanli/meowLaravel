<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use config;
use resources\lang;

class ControllerTest extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {

        // Retourner la vue
        return view('viewTest', [
            'data' => [
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
            ]
        ]);
    }

    public function getData($index)
    {
        // Charger le fichier JSON
        // $data = file_get_contents(resource_path('dataTest.json'));

        // // Décoder le JSON
        // $data = json_decode($data, true);

        // // Vérifier si l'index est valide
        // if (!isset($data[$index])) {
        //     abort(404, 'Index invalide');
        // }

        // // Récupérer la donnée
        // $data = $data[$index];

        // // Retourner la donnée
        // response()->json($data);
       
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
        return view('viewTest', $data[$index]);

    }
}