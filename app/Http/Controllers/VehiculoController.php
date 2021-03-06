<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vehiculo;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\VehiculoFormRequest;
use DB;

class VehiculoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {

        $vehiculo=DB::table('vehiculo')
            ->orderBy('id_vehiculo','desc')
            ->paginate(10);

        return view('parqueadero.vehiculo.index',["vehiculo"=>$vehiculo]);
    }
   

    public function create()
    {
        return view("parqueadero.vehiculo.create");
    }
    public function store (VehiculoFormRequest $request)
    {
        $vehiculo = new Vehiculo;
		$vehiculo->placa=$request->get('placa');
		$vehiculo->telefono=$request->get('telefono');
		$vehiculo->color=$request->get('color');
		$vehiculo->estado=$request->get('estado');
        $vehiculo->save();
        return Redirect::to('parqueadero/vehiculo');

    }


    public function edit($id)
    {
        return view("parqueadero.vehiculo.edit",["vehiculo"=>Vehiculo::findOrFail($id)]);
    }


    public function update(VehiculoFormRequest $request,$id)
    {
        $vehiculo=Vehiculo::findOrFail($id);
		$vehiculo->placa=$request->get('placa');
		$vehiculo->telefono=$request->get('telefono');
		$vehiculo->color=$request->get('color');
		$vehiculo->estado=$request->get('estado');
        $vehiculo->update();
        return Redirect::to('parqueadero/vehiculo');
    }


    public function destroy($id)
    {
        $vehiculo=Vehiculo::findOrFail($id);

        $vehiculo->delete();
        return Redirect::to('parqueadero/vehiculo');
    }


    public function descargarExcel(Request $request){
            return view('parqueadero.vehiculo.descargarExcel');
    }


}
