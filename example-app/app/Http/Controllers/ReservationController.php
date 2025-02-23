<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function ajouterReservation(Request $request)
    {
        $reseration = $request->validate(

            [
                'name' => 'required',
                'date_debut' => 'required',
                'date_fine' => 'required',
                'salle_id' => 'required',

            ]

        );
        $reservations = Reservation::get();
        foreach ($reservations as $reservation) {
            if ($reservation->salle_id != $request->salle_id) {
                Reservation::create(['user_id' => 3, 'name' => $request->name, 'date_debut' => $request->date_debut, 'date_fine' => $request->date_fine, 'salle_id' => $request->salle_id, 'status' => 'pending']);
                return redirect('/salle');
            }

            if ($reservation->salle_id == $request->salle_id) {
                if (($request->date_debut<= $reservation->date_debut) ) {
                    if ($request->date_fine >= $reservation->date_fine ) {
                        Reservation::create(['user_id' => 3, 'name' => $request->name, 'date_debut' => $request->date_debut, 'date_fine' => $request->date_fine, 'salle_id' => $request->salle_id, 'status' => 'pending']);
                        return redirect('/salle');
                    }
                }
            } else {
                return redirect('/salle');
            }
        }
    }
}
