<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursocontroller extends Controller
{
    //esta en resources\views\
    public function index(){
        $cursos = curso::paginate();
        //para ver la vista en la pag
        return view('curso.index',compact('cursos'));
    }

    public function create(){
        return view('curso.create');

    }

    public function show($id){

        $curso = curso::find($id);

        return view('curso.show', compact('curso'));
    }
}
