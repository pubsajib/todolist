<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller{
    public function index(){
        $items = Todo::all();
        return view('todos.index', compact('items'));
    }
    public function create() {
        return view('todos.create');
    }
    public function store(Request $request) {
        $request->validate([
            'text' => 'required'
        ]);

        $todo = new Todo;
        $todo->text = $request->text;
        $todo->body = $request->body;
        $todo->due  = $request->due;
        $todo->save();

        flash('New TODO created.')->important()->success();
        return redirect()->route('home');
    }
    public function show($id) {
        $todo = Todo::findOrFail($id);
        return view('todos.show', compact('todo'));
    }
    public function edit($id) {
        $todo = Todo::findOrFail($id);
        return view('todos.edit', compact('todo'));
    }
    public function update(Request $request, $id) {
        $request->validate([
            'text' => 'required'
        ]);

        $todo = Todo::findOrFail($id);
        $todo->text = $request->text;
        $todo->body = $request->body;
        $todo->due  = $request->due;
        $todo->save();

        flash('TODO updated.')->important()->success();
        return redirect()->route('home');
    }
    public function destroy($id) {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        flash('TODO deleted')->important()->success();
        return redirect()->route('home');
    }
}
