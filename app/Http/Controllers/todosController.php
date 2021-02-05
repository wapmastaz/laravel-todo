<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use Illuminate\Support\Facades\Session;

class todosController extends Controller
{
    public function index() {

       $data = Todos::all()->sortDesc();

        return view('todos.index')->with('todos', $data);
    }

    public function show($todoId) {

    $todo = Todos::findOrFail($todoId);

    // dd($todo->title);

    return view('todos.show')->with('todo', $todo);

    }

    public function create() {
        
        return view('/todos.create');

    }

    public function store(Request $request) {

        // dd($request->all());
        // validate data

        $request->validate([
            'title' => 'required|max:20',
            'description' => 'required'
        ]);
        
        $todo = new Todos();

        $todo->title = $request['title'];

        $todo->description = $request['description'];

        $todo->completed = false;

        $todo->save();

        Session::flash('message', 'Todo created successful!'); 

        Session::flash('alert-class', 'alert-success'); 

        return redirect('/todos');

    }

    public function edit($id) {

        $todo = Todos::findOrFail($id);

       return view('/todos.edit')->with('todo', $todo);

        
    }

    public function update(Request $request) {

        // dd($request->all());
        $data = $request->all();

        $todo = Todos::findOrFail($data['todo-id']);

        $validated = $request->validate([
            'title' => 'required|max:20',
            'description' => 'required'
        ]);

        $todo->title = $validated['title'];

        $todo->description = $validated['description'];

        $todo->save();

        Session::flash('message', 'Todo updated successful!'); 

        Session::flash('alert-class', 'alert-success');

         return redirect('/todos/' . $data['todo-id'])->with('todo', Todos::find($data['todo-id']));
         
        //  $this->show($data['todo-id']);
        
    }

    public function destroy($id) {

        $todo = Todos::findOrFail($id);

        $todo->delete();

        Session::flash('message', 'Todo deleted successful!'); 

        Session::flash('alert-class', 'alert-danger'); 

        return redirect('/todos');
    }

    public function completed($id) {

        $todo = Todos::findOrFail($id);

        $todo->completed = true;

        $todo->save();

        Session::flash('message', 'Todo completed successful!'); 
        
        Session::flash('alert-class', 'alert-success'); 

        return redirect('/todos');
    }
    
}