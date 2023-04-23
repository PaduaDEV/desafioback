<?php

namespace App\Http\Controllers;

use App\Models\Api;

use Illuminate\Http\Request;



class ApirestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apis = Api::all();
        return response()->json($apis);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        if (Api::create($request->all())) {
            return response()->json([
                'message' =>'Usuário cadastrado com sucesso.'
            ],201);
        }
        return response()->json([
            'message' =>'Erro ao cadastras usuário.'
        ],404);
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $Api)
    {
        $api = Api::findOrFail($Api);
        return response()->json($api);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Api)
    {
        $api = Api::findOrFail($Api);
        $api->update($request->all());
        return response()->json($api);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Api)
    {
        $api = Api::findOrFail($Api);
        $api->delete();
        return response()->json(['message' => 'Registro excluído com sucesso.']);
    }
}
