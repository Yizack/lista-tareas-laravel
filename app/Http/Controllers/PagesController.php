<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class PagesController extends Controller {
    public function index () {
        return inertia("index", [
            "tareas" => Tarea::mostRecent()->get()
        ]);
    }
    public function about () {
        return inertia("about");
    }
}
