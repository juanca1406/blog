<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursocontroller extends Controller
{
    //esta en resources\views\
    public function index(){
        $cursos = curso::orderBy('id', 'desc')->paginate();
        //para ver la vista en la pag
        return view('curso.index',compact('cursos'));
    }

    public function create(){
        return view('curso.create');

    }
    public function store(Request $request){
        $curso = new curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); 
        return redirect()->route('cursos.show', $curso);
    }

    public function show(curso $curso){

        return view('curso.show', compact('curso'));
    }
    public function edit(curso $curso){

        return view('curso.edit', compact('curso'));
    }
    
    public function update(Request $request, curso $curso){
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
