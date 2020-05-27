<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AdminController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }

    public function administrador()
    {
        $url = $_ENV['API_URL'];
        $auth = $_ENV['AUTH_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($auth . 'admin/allProductes');
        $productos = $respuesta2->json();

        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'color/all');
        $colors = $respuesta5->json();

        return view('administrador', compact('productos', 'marcas', 'colors'));
    }

    public function adminDetalle($id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'producte' . $id);

        $producto = $respuesta2->json();
        return view('adminDetalle', compact('producto'));
    }

    public function formAddProducto()
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'categoria/all');
        $categorias = $respuesta2->json();

        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'marca/all');
        $marcas = $respuesta2->json();

        $respuesta5 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'color/all');
        $colors = $respuesta5->json();

        return view('formAddProducto', compact('categorias', 'marcas', 'colors'));
    }

    public function addProducto(Request $request)
    {
        $auth = $_ENV['AUTH_URL'];

        $imatge = $request->file('imatge');
        $imatge->move('images', $imatge->getClientOriginalName());
        $request->imatge = $imatge->getClientOriginalName();

        $preuOferta = $request->preu - ($request->preu * ($request->oferta / 100));

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($auth . 'admin/add/producte', [
                'nom' => $request->nom,
                'marca_id' => $request->marca_id,
                'stock' => $request->stock,
                'preu' => $request->preu,
                'categoria_id' => $request->categoria_id,
                'color_id' => $request->color_id,
                'descripcio_curta' => $request->descripcio_curta,
                'descripcio_llarga' => $request->descripcio_llarga,
                'oferta' => $request->oferta,
                'preuOferta' => $preuOferta,
                'imatge' => $request->imatge
            ]);

        return redirect('/administrador');
    }

    public function formEditProducto($id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'producte' . $id);
        $producto = $respuesta2->json();

        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'categoria/all');
        $categorias = $respuesta3->json();

        $respuesta4 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'marca/all');
        $marcas = $respuesta4->json();

        $respuesta5 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'color/all');
        $colors = $respuesta5->json();

        return view('formEditProducto', compact('producto', 'categorias', 'marcas', 'colors'));
    }

    public function editProducto(Request $request, $id)
    {
        $url = $_ENV['API_URL'];
        $auth = $_ENV['AUTH_URL'];

        $respuesta2 = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'producte' . $id);
        $producto = $respuesta2->json();

        if (request('imatge')) {
            $imatge = $request->file('imatge');
            $imatge->move('images', $imatge->getClientOriginalName());
            $request->imatge = $imatge->getClientOriginalName();
        } else {
            $request->imatge = $producto['imatge'];
        }

        $preuOferta = $request->preu - ($request->preu * ($request->oferta / 100));


        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($auth . 'admin/edit/producte' . $id, [
                'nom' => $request->nom,
                'marca_id' => $request->marca_id,
                'stock' => $request->stock,
                'preu' => $request->preu,
                'categoria_id' => $request->categoria_id,
                'color_id' => $request->color_id,
                'descripcio_curta' => $request->descripcio_curta,
                'descripcio_llarga' => $request->descripcio_llarga,
                'oferta' => $request->oferta,
                'preuOferta' => $preuOferta,
                'imatge' => $request->imatge
            ]);

        return redirect('/administrador');
    }

    public function deleteProducto($id)
    {
        $auth = $_ENV['AUTH_URL'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($auth . 'admin/delete/producte/' . $id);
        return redirect("/administrador");
    }

    public function formAddUsuario()
    {
        $url = $_ENV['API_URL'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get($url . 'allUsers');
        $usuarios = $response->json();
        return view('formAddAdmin', compact('usuarios'));
    }

    public function administrarAdmins(Request $request)
    {
        $auth = $_ENV['AUTH_URL'];

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->post($auth . 'admin/administrarAdmin', [
                'id' => $request->id,
                'esAdmin' => $request->esAdmin,
            ]);

        return redirect('/administrador');
    }

    public function ordenar($orden)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'ordenar/' . $orden);
        $productos = $respuesta2->json();

        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('administrador', compact('productos', 'marcas', 'colors'));
    }

    public function filtroMarca($marca_id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'marca' . $marca_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('administrador', compact('productos', 'marcas', 'colors'));
    }

    public function filtroColor($color_id)
    {
        $url = $_ENV['API_URL'];

        $respuesta2 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'color' . $color_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Requested-With' => 'XMLHttpRequest'
        ])->get($url . 'color/all');
        $colors = $respuesta5->json();
        return view('administrador', compact('productos', 'colors', 'marcas'));
    }

}
