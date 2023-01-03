<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index() {
        $todos = Agenda::latest()->orderBy('done', 'ASC')->paginate(10);
        return view('bootstrap.pages.home', ['todos'=>$todos]);
    }

    public function store(Request $request) {
        $request->validate(['todo'=>'required']);
        $todo = new Agenda();
        $todo->to_do = $request->todo;
        $todo->save();
        return redirect('home');
    }

    public function destroy ($id) {
        $itemToDelete = Agenda::find($id);
        $itemToDelete->delete();

        return redirect('home');
    }
}
