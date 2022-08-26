<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {

        $cursos = Curso::paginate(3);

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {

        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {

        $curso = new Curso;

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();

        // Redireccionamos al usuario a la ruta espeficada (.show necesita una referencia para poder traerla) pero Laravel entiende por defecto que si llamamos a la instancia, debe traerse el id. Por lo tanto ->id es opcional.
        return redirect()->route('cursos.show', $curso->id);
    }

    // Metodo donde ya instancia dentro del parametro por Laravel
    public function edit(Curso $curso /* $id */)
    {

        /* $curso = find($id); */

        return view('cursos.edit', compact('curso'));
    }
    // Metodo de toda la vida
    public function show($id)
    {

        $curso = Curso::find($id);

        // compact('parametro = show($curso)') === ['curso' => $curso];
        return view('cursos.show', compact('curso'));
    }

    public function update(StoreCurso $request, Curso $curso)
    {
        /* Debugs */
        // return $request->all();
        // return $curso;

        $curso->nombre = $request->nombre;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);    // Laravel entiendo que $curso por defecto tomará el ID
    }
}
