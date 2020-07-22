<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Message;
use Illuminate\Http\Request;

class TicketsController extends Controller
{



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required|in:request,complaint',
            'customer_id' => 'required|exists:customers,id',
            'content' => 'required'
        ]);

        $message = $request['content'];
        Ticket::create([
            'title' => $request->title,
            'type' => $request->type,
            'ticketable_type' => User::class,
            'ticketable_id' => auth()->user()->id
        ])->messages()->create([
            'customer_id' => $request->customer_id,
            'content' => $message,
        ]);
        return response()->json(['msg' => "Forfait ajouté correctement"], 200, []);
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function answer(Request $request, Ticket $ticket)
    {
        $request->validate([
            'content' => 'required'
        ]);


        $message = $request['content'];

        Message::create([
            'ticket_id' => $ticket->id,
            'user_id' => auth()->user()->id,
            'content' => $message,
        ]);
        return response()->json(['msg' => "Reponse ok"], 200, []);

    }


    public function trash(Ticket $ticket)
    {
        $ticket->delete();
        return response()->json(['msg' => "Ticket mis à la corbeille"], 200, []);
    }
}
