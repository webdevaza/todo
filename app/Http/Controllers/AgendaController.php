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


    public function destroy ($id) {
        $itemToDelete = Agenda::find($id);
        $itemToDelete->delete();
        
        return redirect('home');
    }
}
