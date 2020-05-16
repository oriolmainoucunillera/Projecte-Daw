<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AdminController
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function administrador()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/admin/allProductes');
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();

        return view('administrador', compact('productos', 'marcas', 'colors'));
    }

    public function formAddProducto()
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/categoria/all');
        $categorias = $respuesta2->json();

        $respuesta2 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta2->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();

        return view('formAddProducto', compact('categorias', 'marcas', 'colors'));
    }

    public function addProducto(Request $request) {

            $imatge = $request->file('imatge');
            $imatge->move('images', $imatge->getClientOriginalName());
            $request->imatge = $imatge->getClientOriginalName();

        $response = Http::post('http://127.0.0.1:8000/api/admin/add/producte', [
            'nom' => $request->nom,
            'marca_id' => $request->marca_id,
            'stock' => $request->stock,
            'preu' => $request->preu,
            'categoria_id' => $request->categoria_id,
            'color_id' => $request->color_id,
            'descripcio_curta' => $request->descripcio_curta,
            'descripcio_llarga' => $request->descripcio_llarga,
            'oferta' => $request->oferta,
            'imatge' => $request->imatge
        ]);

        return redirect('/administrador');
    }

    public function formEditProducto($id)
    {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/producte'. $id);
        $producto = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/categoria/all');
        $categorias = $respuesta3->json();

        $respuesta4 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta4->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();

        return view('formEditProducto', compact('producto', 'categorias', 'marcas', 'colors'));
    }

    public function editProducto(Request $request, $id) {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/producte'. $id);
        $producto = $respuesta2->json();

        if(request('imatge')) {
            $imatge = $request->file('imatge');
            $imatge->move('images', $imatge->getClientOriginalName());
            $request->imatge = $imatge->getClientOriginalName();
        } else {
            $request->imatge = $producto['imatge'];
        }

        $response = Http::post('http://127.0.0.1:8000/api/admin/edit/producte'. $id, [
            'nom' => $request->nom,
            'marca_id' => $request->marca_id,
            'stock' => $request->stock,
            'preu' => $request->preu,
            'categoria_id' => $request->categoria_id,
            'color_id' => $request->color_id,
            'descripcio_curta' => $request->descripcio_curta,
            'descripcio_llarga' => $request->descripcio_llarga,
            'oferta' => $request->oferta,
            'imatge' => $request->imatge
        ]);

        return redirect('/administrador');
    }

    public function deleteProducto($id)
    {
        $response = Http::post('http://127.0.0.1:8000/api/admin/delete/producte/'. $id);
        return redirect("/administrador");
    }

    public function formEditUsuario()
    {
        $response = Http::get('http://127.0.0.1:8000/api/admin/allAdmins');
        $admins = $response->json();

        $response2 = Http::get('http://127.0.0.1:8000/api/allUsers');
        $usuarios = $response2->json();

        return view('formEditUsuario', compact('admins', 'usuarios'));
    }

    public function formAddUsuario() {
        $response = Http::get('http://127.0.0.1:8000/api/allUsers');
        $usuarios = $response->json();
        return view('formAddAdmin', compact('usuarios'));
    }

    public function addUsuario(Request $request) {
        $response = Http::post('http://127.0.0.1:8000/api/admin/addAdmin', [
            'usuari_id' => $request->usuari_id,
            'esAdmin' => $request->esAdmin,
        ]);

        return redirect('/administrador');
    }

    public function editUsuario(Request $request, $id)
    {
        $response = Http::post('http://127.0.0.1:8000/api/admin/editAdmin', [
            'usuari_id' => $request->usuari_id,
            'esAdmin' => $request->esAdmin,
        ]);

        return redirect('/administrador');

        return view('formEditUsuario', compact('usuarios'));
    }

    public function ordenar($orden) {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/ordenar/'.$orden);
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('administrador', compact('productos', 'marcas', 'colors'));
    }

    public function filtroMarca($marca_id) {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/marca'.$marca_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('administrador', compact('productos', 'marcas', 'colors'));
    }

    public function filtroColor($color_id) {
        $respuesta2 = Http::get('http://127.0.0.1:8000/api/color'.$color_id);
        $productos = $respuesta2->json();

        $respuesta3 = Http::get('http://127.0.0.1:8000/api/marca/all');
        $marcas = $respuesta3->json();

        $respuesta5 = Http::get('http://127.0.0.1:8000/api/color/all');
        $colors = $respuesta5->json();
        return view('administrador', compact('productos', 'colors', 'marcas'));
    }

}
