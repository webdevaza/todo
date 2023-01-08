<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index() {
        // $todos = Agenda::latest()->paginate(8);
        // return view('bootstrap.pages.tasks', ['todos'=>$todos]);

        $todos = Agenda::where('done',0)->orderBy('updated_at','desc')->get();
        $dones = Agenda::where('done',1)->orderBy('updated_at','desc')->get();
        $merged = $todos->merge($dones);
        
        
        

        return view('bootstrap.pages.tasks', ['todos'=>$merged]);
    }

    public function store(Request $request, Agenda $task) {
        $request->validate(['todo'=>'required']);
        $task->to_do = $request->todo;
        $task->save();

        return redirect('tasks');
    }
    
    public function destroy ($id) {
        $itemToDelete = Agenda::find($id);
        $itemToDelete->delete();


        return redirect('tasks');

    }

    public function update(Request $request, $id) {
        
        $itemToUpdate = Agenda::find($id);
        $itemToUpdate->done = $request->input_check == "on" ? 1 : 0;
        
        $itemToUpdate->save();

        // return redirect('tasks');
        return back();
    }
    

}
