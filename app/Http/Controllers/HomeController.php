<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Sensor;  // Si estás usando base de datos local
use Illuminate\Support\Facades\Http; // Si deseas hacer una llamada API externa
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('home');

       // Aquí recuperamos los datos para la vista del home (simulados por ahora)
       $user = Auth::user();

        // Obtener los sensores desde la base de datos
        // Si usas API, descomenta el siguiente bloque y usa el código de abajo

        // Recuperar los datos de la API externa (si estás usando una)
        //$response = Http::get('https://api.externa.com/sensores'); // Reemplaza con la URL real de tu API
        //$sensores = $response->json(); // Si la respuesta es un JSON

        // O si prefieres obtenerlos de la base de datos local (MongoDB)
        // $sensores = Sensor::all(); // Esto es para cuando se usan sensores desde la base de datos local

        //return view('home', compact('sensores'));
    }
    /*public function toggleAlarm(Request $request)
    {
        // Lógica para activar o desactivar la alarma
    }
      */  
       
}

 
