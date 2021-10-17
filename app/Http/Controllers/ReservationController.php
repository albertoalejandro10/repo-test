<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required',
            'numberPeople' => 'required',
            'reservePrice' => 'required',
            'reserveDate' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
        ]);

        $reservation = Reservation::create($request->all());

        return redirect()->route('exercises.index', $reservation->id)->with('status', 'Reservación creada');
    }
}
