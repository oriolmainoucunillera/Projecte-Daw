<?php


namespace App\Http\Controllers;


use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EventController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $url = $_ENV['API_URL'];

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'eventos');
        $events = $respuesta3->json();

        return view('events_home', compact('events'));
    }

    public function evento_formulari()
    {
        return view('form_event');
    }

    public function evento_crear(Request $request)
    {
        $url = $_ENV['API_URL'];

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($url . 'evento_crear', [
                'titol' => $request->titol,
                'data_hora' => $request->data_hora,
            ]);
        return redirect()->route('eventos')->with('crear', 'Creat correctament.');
    }

    public function evento_eliminar($id)
    {
        $url = $_ENV['API_URL'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($url . 'eventos_delete/'. $id);
        return redirect()->route('eventos')->with('eliminar', 'Eliminat correctament.');
    }

    public function eventoDetalle($id) {
        $url = $_ENV['API_URL'];

        $respuesta3 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'eventoDetalle' . $id);
        $event = $respuesta3->json();

        return view('detalleEvento', compact('event'));
    }

}
