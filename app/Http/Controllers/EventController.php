<?php


namespace App\Http\Controllers;


use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('data_hora', 'asc')->get();
        return view('events_home', compact('events'));
    }

    public function event_formulari()
    {
        return view('form_event');
    }

    public function event_form_crear(Request $request)
    {
        $newEvent = new Event;
        $newEvent->titol = $request->input('titol');
        $newEvent->data_hora = $request->input('data_hora');
        $newEvent->save();
        return redirect()->route('home')->with('crear', 'Creat correctament.');
    }

    public function event_eliminar($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('home')->with('eliminar', 'Eliminat correctament.');
    }

}
