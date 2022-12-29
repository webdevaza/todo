<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index() {
        $todos = Agenda::latest()->paginate(15);
        return view('pages.home', ['todos'=>$todos]);
    }
}
