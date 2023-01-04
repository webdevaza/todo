<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index() {

        $todos = Agenda::latest()->paginate(10);
        return view('bootstrap.pages.home', ['todos'=>$todos]);
    }

    public function store(Request $request, Agenda $task) {
        $request->validate(['todo'=>'required']);
        $task->to_do = $request->todo;
        $task->save();
        return redirect('home');
    }
   

    public function destroy ($id) {
        $itemToDelete = Agenda::find($id);
        $itemToDelete->delete();

        return redirect('home');
    }

    public function update(Request $request, $id) {
        
        $itemToUpdate = Agenda::find($id);
        $itemToUpdate->done = $request->input_check == "on" ? 1 : 0;
        
        $itemToUpdate->save();
        return redirect('home');
    }
}
