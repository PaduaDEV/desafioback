<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosController extends Controller
{
    public function receberDados(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $curso = $request->input('curso');
        $carga_horaria = $request->input('carga_horaria');
        $valor = $request->input('valor');

        // implementar o processamento dos dados recebidos aqui

        return response()->json(['mensagem' => 'Dados recebidos com sucesso!']);
    }
}
