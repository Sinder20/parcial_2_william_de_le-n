<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiante = Estudiante::all(['id','name','address','phone_number']);
        return response()->json($estudiante);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $estudiante = Estudiante::create($request->post());
        return response()->json([           
            'estudiante'=>$estudiante
        ]);
    }
    public function show(Estudiante $estudiante)
    {
        return response()->json($estudiante);
    }
}
