<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Para traer todos los productos de la BD:
        $productos = Productos::all();
        //Retorna una vista, en este caso el index.blade.php con todos los porductos y los que hay entre comillas es un nombre, se pone cualquiera
        return view('productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Sirve para redireccionarme a la vista
        return view("productos.almacenar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Productos();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        if($request->hasFile('imagen')){
            $producto->imagen = $request->file('imagen')->store('uploads','public');
        }
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::find($id);
        return view('productos.formEditar')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);

        $producto = Productos::find($id);

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        //Si en el formulario se adjuntó una NUEVA foto...
        if($request->hasFile('imagen')){
            //Borramos de la carpeta public aquella imagen que tenga la misma ruta que $empleado->foto
            Storage::delete('public/'.$producto->imagen);
            //Suba la NUEVA foto a la carpeta uploads en public y en el JSON guarde la dirección de la foto
            $producto->imagen = $request->file('imagen')->store('uploads', 'public');
        }
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Productos::find($id);
        $producto->delete();
        //Recargar la vista:
        return redirect()->route('productos.index');
    }
}
