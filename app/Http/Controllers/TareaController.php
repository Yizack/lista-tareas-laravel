<?php

namespace App\Http\Controllers;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TareaController extends Controller {
    /**
     * Muestra todas las tareas de la base de datos
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return Tarea::orderBy("created_at", "asc")->get();
    }

    /**
     * Almacena una nueva tarea en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $nuevaTarea = new Tarea;
        $nuevaTarea->nombre = $request->tarea["nombre"];
        $nuevaTarea->save();
        return $nuevaTarea;
    }

    /**
     * Actualiza el estado de la tarea a completado o no completado
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request, $id) {
        $getTarea = Tarea::find($id);  
        if($getTarea){
           $getTarea->completado = $request->completado;
           $getTarea->updated_at = Carbon::now();
           $getTarea->save();
           return $request;
        } 
        return "Tarea no encontrada";
    }

    /**
     * Modificar una tarea
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $getTarea = Tarea::find($id);  
        if($getTarea){
           $getTarea->nombre = $request->tarea["nombre"];
           $getTarea->updated_at = Carbon::now() ;
           $getTarea->save();
           return $getTarea;
        } 
        return "Tarea no encontrada";
    }

    /**
     * Elimina una tarea de la base de datos
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $getTarea = Tarea::find($id);
        if($getTarea) {
           $getTarea->delete();
           return $getTarea;
        }
    }
}
