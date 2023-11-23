<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coment;

class ProductsController extends Controller
{
    public function show(){
        $productos = Product::all();
        return view('productos',compact('productos'));
    }

    public function productoVer($productoVer){

        $producto = Product::where('nombre', $productoVer)->first();
    
        if($producto == null){
            abort(404);
        }

        $comentarios = Coment::where('product_id', $producto->id)
        ->join('users','coments.user_id','=','users.id')
        ->get();
        return view('detalleProducto', compact(['producto','comentarios']));

    }


    public function busqueda(Request $request){
        $productos = Product::where('nombre',  'Like', '%'.$request->nombre.'%')->get();

        return view('productos', compact('productos'));
    }

    public function busquedaAvanzada(Request $request){

        $productos = Product::where('marca',  'Like', '%'.$request->marca.'%')->where('categoria', $request->categoria)->get();
    
        $data = [
            'productos' => $productos,
        ];
        if($productos == null){
            return 'No hay productos';
        }
        return view('busqueda', $data);
    }

    public function agregar(){
        return view('registrar-productos');
    }

    public function store(Request $request){
        $request->validate([
            'descripcion' => ['required','max:255', 'string', 'min:10'],
            'nombre' => ['required','max:255', 'string', 'min:10'],
            'ingredientes' => ['required','max:50', 'string', 'min:10'],
            'imagen' => ['required','mimes:jpeg,png,jpg','max:5000']
        ]);
        
        $fileName = 'img/productos/'.str_replace(' ','',$request->nombre).'.'.$request->imagen->getClientOriginalExtension();
        $request->imagen->move(public_path("img/productos"),$fileName);
        
        $producto = New Product();
        $producto->nombre = $request->nombre;
        $producto->imagen = $fileName;
        $producto->descripcion = $request->descripcion;
        $producto->ingredientes = $request->ingredientes;
        $producto->precio = $request->precio;

        $producto->save();
        return redirect(route('productos.show'))->with('info', $request->nombre);
    }
}
