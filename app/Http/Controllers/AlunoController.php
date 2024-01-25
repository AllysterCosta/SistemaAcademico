<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function cadastro(Request $request)
    {
        return view('admin/aluno/createAluno'/* , compact('alunos') */);
    }

    public function editar(Request $request)
    {
        return view('admin/aluno/edit');
    }
}
