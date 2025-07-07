<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketsRequest;
use App\Http\Requests\TicketsUpdateRequest;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function create()
    {
        return view("ticket.create");
    }

    public function index()
    {
        return view('ticket.index',['tickets'=> Tickets::all()]);
    }

    public function store(TicketsRequest $request)
    {
    $ticket = new Tickets($request->all());
    $ticket -> save();
    return redirect(route('ticket.index'));
    }


    public function destroy(int $id)
    {
        $ticket = Tickets::find($id);
        $ticket->delete();
        return redirect(route('ticket.index'));
    }


    public function edit(int $id)
    {
        if (!Auth::user()) return redirect(route("ticket.index"));
        $ticket = Tickets::find($id);
        return view("ticket.edit", ['ticket' => $ticket,]);
    }

    public function update(TicketsUpdateRequest $request, int $id)
    {
        $ticket = Tickets::find($id);
        $data = $request -> validated();
        $ticket -> name = $data["name"];
        $ticket -> price = $data["price"];
        $ticket -> save();
        return redirect(route('ticket.index'));
    }
}
