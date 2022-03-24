<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use DateTime;

class ReservationController extends Controller
{

    /* Cette fonction affiche la page reservation */
    public function reservation()
    {
        return view('main.reservation');
    }


    /* Cette fonction stock les informations dans la base de données */
    public function store(Request $request)
    {
        
        // @fixme dans les messages d'erreurs, c'est le nom du champ dans la BDD qui est utilisé
        $rules = $this->getRules();
        $validated = $request->validate($rules);

        $reservation = new Reservation();
        $reservation->nom = $validated['nom'];
        $reservation->tel = $validated['prenom'];
        $reservation->date = $validated['date'];
        $reservation->heure = $validated['heure'];
        $reservation->couverts = $validated['couvert'];
        $reservation->commentaires = $validated['commentaire'];

        $reservation->save();

        return back()->with('success', 'Votre demande a bien été prise en compte');
    }



    /* Cette fonction designe les règles */
    public function getRules()
    {
        $today = new DateTime();
            // on fixe l'heure et les minutes à zéro
            $today->setTime(0, 0);
        return [
            'nom' => ['required', 'min:2', 'max:190', 'not_regex:/[0-9]+/'],
            'prenom' => ['required', 'min:2', 'max:190', 'not_regex:/[0-9]+/'],
            'date' => ['required', 'date', 'after_or_equal:'.$today->format('Y-m-d')],
            'heure' => ['required'],
            'couvert' => ['required'],
            'commentaire' => ['required']
        ];
    }
}
