<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CursoRequest; // Importa el CursoRequest
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        // Lógica para filtrar los cursos según los parámetros de búsqueda
        $cursos = Curso::query();

        if ($request->has('filtro')) {
            $filtro = $request->input('filtro');
            $cursos->where('nombre', 'like', "%$filtro%")
                   ->orWhere('descripcion', 'like', "%$filtro%");
        }

        $cursos = $cursos->get();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(CursoRequest $request) // Utiliza CursoRequest para validar
    {
        Curso::create($request->all());

        return redirect()->route('cursos.index');
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(CursoRequest $request, Curso $curso) // Utiliza CursoRequest para validar
    {
        $curso->update($request->all());

        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }

    public function eliminar(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }



}
