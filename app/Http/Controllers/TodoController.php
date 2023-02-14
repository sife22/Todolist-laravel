<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    }

    public function create(){
        return view('create');
    }

    public function edit(Todo $todo){
        return view('edit')->with('todos', $todo);;
    }



    public function store(){
        try{
            $this->validate(request(), [
                'title'=>['required'],
                'description'=>['required']
            ]);
        }
        catch(ValidationException $e){
        }

        $data = request()->all();

        $todo = new Todo();

        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Votre tache cree avec succes');

        return redirect('/');
    }

    public function details(Todo $todo){
        return view('details')->with('todos', $todo);
    }

    public function update(Todo $todo){

        try {
            $this->validate(request(), [
                'title' => ['required'],
                'description' => ['required'],
            ]);
        } catch (ValidationException $e) {
            echo "errpr";
        }

        $data = request()->all();

        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Votre tache est modifie avec succes');

        return redirect('/');

    }

    

    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/');
    }
}
