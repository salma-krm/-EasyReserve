<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function ajouterSalle(Request $request){
        $request->validate(
            [
               'name' =>'required',
               'capacite'=>'required',
               'price' =>'required',
            ]
            );
  
    }
}
