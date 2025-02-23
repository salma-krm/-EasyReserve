<?php

namespace App\Http\Controllers;
use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function create(Request $request){
        
         $salle = $request->validate(
            [
               'title' =>'required',
               'photo' =>'required',
               'location' =>'required',
               'capacite'=>'required',
               'start_date' =>'required',
               'status' =>'required',
               'description' =>'required',
            ]
            );
            Salle::create($salle);
           return redirect('/salle/show');
    }
    public function show(){
        $salles = Salle::get();
        return view('salle', compact('salles'));
    }
    public function get(){
        $salles = Salle::get();
        return view('home', compact('salles'));
    }
    public function update($id) {
        
      $salle =salle::find($id);
        return view ('updateSalle',compact('salle'));
    }




    public function edit(request $request){
        $salle = Salle::find($request['id']);
        $salle->update($request->all());
            return redirect('/salle/show');
    }



    public function delete(Request $request)
    {
    //    dd( $request);
        $salle = Salle::find($request['id']);
        Salle::where('id', $request['id'])->delete();
        return redirect('/salle/show');
    }
}
