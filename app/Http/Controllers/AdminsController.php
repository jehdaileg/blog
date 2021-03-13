<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function listAdmin()
    {
    	$admins = [
    		["id"=>1, "nom"=>"jehdai", "prenom"=>"LeGrand"],
    		["id"=>2, "nom"=>"Jean", "prenom"=>"Lionnel"],
    		["id"=>3, "nom"=>"Carmel", "prenom"=>"Artical"]
    	];

    	return view('adminView', compact('admins'));
    }
}
