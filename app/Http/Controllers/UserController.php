<?php


namespace App\Http\Controllers;

use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function login1()
    {
        return view('login1');
    }

    public function api_login(Request $request)
    {

        $response = Http::post('http://127.0.0.1:8000/api/auth/login', [
            'email' => $request->email,
            'password' => $request->password
        ]);
        $login_api = $response->json();
        $token = $login_api['access_token'];
        SetCookie("token", $token);
        return redirect('/');
    }

    public function register1()
    {
        return view('register1');
    }

    public function api_register(Request $request)
    {

        $response = Http::post('http://127.0.0.1:8000/api/auth/signup', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation
        ]);
        return redirect('login1');
    }

    public function api_logout()
    {

        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get('http://127.0.0.1:8000/api/auth/logout');
    }

    public function api_user()
    {
        $response = Http::withToken($_COOKIE["token"])
            ->withHeaders([
                'Content-Type' => 'application/json',
                'X-Requested-With' => 'XMLHttpRequest'
            ])->get('http://127.0.0.1:8000/api/auth/user');
        $user = $response->json();
        return $user;
    }

}
