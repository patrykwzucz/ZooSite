<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;


class ReservationController extends Controller
{
    public function create()
    {
        $tickets = Tickets::all();
        return view("reservations.create", ["tickets"=>$tickets]);

    }


    public function store(ReservationRequest $request)
    {
        $data = $request->all();

        $ticket = Tickets::find($data['ticketId']);
        $price = $ticket->price;

        $sum = $price * $data['count'];

        $reservation = new Reservation([
            'ReservedName' => $data['name'],
            'PhoneNumber' => $data['phoneNumber'],
            'TicketType' => $data['ticketId'],
            'ReservationDate' => $data['reservationDate'],
            'Count' => $data['count'],
            'Sum' => $sum,
            'UserId' => auth()->id(), 

        ]);

        $reservation->save();
        return redirect(route('reservation.store'));
    }
    

    public function edit($id){
        $reservation = Reservation::findOrFail($id);
        $tickets = Tickets::all();

        return view("reservations.edit", compact("reservation", "tickets"));
    }

    public function update(Request $request, $id){
        $data = $request->all();

        $ticket = Tickets::find($data['ticketId']);
        $price = $ticket->price;
        $sum = $price * $data['count'];

        $reservation = Reservation::findOrFail($id);

        $reservation->update([
            'ReservedName' => $data['name'],
            'PhoneNumber' => $data['phoneNumber'],
            'TicketType' => $data['ticketId'],
            'ReservationDate' => $data['reservationDate'],
            'Count' => $data['count'],
            'Sum' => $sum,
        ]);        

        return redirect(route('reservation.index'))->with('success', 'Reservation updated.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservation.index')->with('success', 'Reservation deleted.');
    }


}



