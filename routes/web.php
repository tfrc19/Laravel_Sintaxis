<?php

use App\Models\Articulo;
use App\Models\Cliente;
use App\Models\Perfil;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/',function(){
    return view('welcome');
});

Route::get('/blog','paginasController@create');
Route::get('/contacto','paginasController@contacto');
Route::get('/usuarios','paginasController@usuarios');
/*
Route::get('/insertar',function(){
    DB::insert('insert into articulos (producto,precio,observacion,recomendaciones,codigo) values(?,?,?,?,?)',[
        'Chocolate',20,'chocolate de Ecuador','se debe beber con leche','abc123'
    ]);
});

Route::get('/seleccionar',function(){
    $articulos = DB::select('select * from articulos');
    //print_r($articulos);
    foreach($articulos as $articulo){
        return $articulo->producto;
        }
});

Route::get('/actualizar/{producto}', function ($producto) {
   
    DB::update('update articulos set producto=? where producto="perro"', [$producto]);
    
});

Route::get('eliminar/{id}', function ($id) {

   $eliminar= DB::delete('delete from articulos where id = ?', [$id]);
   if($eliminar==0){
       return "No Existe registro para eliminar";
   }
   else
        if($eliminar==1){
            return "Registro elimino";
        }
   //return $eliminar;
});
*/
/*Route::get('/insertar',function(){
    DB::insert('insert into articulos(producto,precio,observacion,recomendaciones,codigo)values(?,?,?,?,?)',
    ['Queso',1.50,'Queso de mesa','Este queso se come sin pan','abc123']);
});*/

//Leer sql con Eloquent
Route::get('/leer',function(){
    //$articulos = Articulo::where('producto','Chocolate')->first();
    //$articulos = Articulo::all();
    //$articulos = Articulo::where('producto','Queso')->orderby('precio','desc')->get();
    $articulos = Articulo::all()->max("precio");
    $articulosPorPrecio = Articulo::where("precio",$articulos)->take(10)->get();
    return $articulosPorPrecio;
    /*foreach($articulos as $articulo){
        echo "Nombre".": ".$articulo->producto;
       
    }*/
});

//Controlador y modelo del cliente
Route::get('/insertarClientes/{nombre}/{apellido}', function($nombre,$apellido) {

    $cliente = new Cliente();
    $cliente->nombre=$nombre;
    $cliente->apellido=$apellido;

    $cliente = $cliente->save();
    return $cliente;
    
});

//Insertar sql con Eloquent

Route::get('/insertar',function(){
    $articulo = new Articulo();
    $articulo->producto = "Pan de molde";
    $articulo->precio=1.80;
    $articulo->observacion="Pan artesanal";
    $articulo->recomendaciones="en cualquier instancia";
    $articulo->codigo="001B";

    $articulo = $articulo->save();
    return $articulo;
});

//Actualizar sql con Eloquent
Route::get('/actualizar',function(){
    $articulo =Articulo::find(7);
    $articulo->producto = "Pan";
    $articulo->precio=1.80;
    $articulo->observacion="Pan artesanal";
    $articulo->recomendaciones="en cualquier instancia";
    $articulo->codigo="001B";

    $articulo = $articulo->save();
    return $articulo;
});

//Actualizar mas de 1 elemento sql con Eloquent
Route::get('/update',function(){
    //Articulo::where("producto","Queso")->update(["pais"=>"Ecuador"]);
    //Sentencia con like
    //Articulo::where("producto","like","%"."Chocolate"."%")->update(["pais"=>"Africa"]);
    Articulo::where("pais","Ecuador")->update(["precio"=>"2.00"]);
});

Route::get('/eliminar',function(){
    
    //Eliminación con un solo criterio
    /*$articulo = Articulo::find(8);
    $articulo->delete();*/
    
    //Eliminacion con mas de un criterio

   $articulo =  Articulo::where("producto","Queso")->where("pais","Ecuador");
   $articulo->delete();
});

Route::get('/insertarMultiple',function(){
    $articulo = Articulo::create(["producto"=>"Yogurt","precio"=>1.10,"observacion"=>"Yogurt de Frutilla","codigo"=>"001ab","pais"=>"Ecuador"])->
    create(["producto"=>"Queso","precio"=>1.10,"observacion"=>"Queso de Cuajada","codigo"=>"001ab","pais"=>"España"]);
});

Route::get('/seleccionarProducto/{nombre}',function($nombre){
       
        $articulo = Articulo::where("producto",$nombre)->get();
        /*$valor = sizeof($articulo);
        echo $valor;*/
        if(sizeof($articulo)>0){
            return $articulo;
        }
        else{
            return "No existen registros";
        }
       /* if(!empty($articulo)){
            return $articulo;
        }
        else{
            if(empty($articulo)){
                return "no existe registro";
            }
           
        }*/
       
});

Route::get('/softDelete',function(){
    Articulo::where('id',17)->delete();
});

Route::get('/listarSoftDelete',function(){
    $articulos = Articulo::withTrashed()
    ->where('deleted_at','!=','NULL')->get();
    //$articulos = Articulo::where('id',19)->get();
    return $articulos;
});

Route::get('/listarOnlyDelete',function(){
    $articulos = Articulo::onlyTrashed()->get();
    return $articulos;
});

Route::get('/restauraDelete',function(){
    $articulos = Articulo::where('id',17)->restore();
   
});

Route::get('/foreceDelete',function(){
    $articulos = Articulo::where('id',19)->forceDelete();
   
});

//Modelo Cliente
Route::get('/insertarClientes/{nombre}/{apellido}', function($nombre,$apellido) {

    $cliente = new Cliente();
    $cliente->nombre=$nombre;
    $cliente->apellido=$apellido;

    $cliente = $cliente->save();
    return $cliente;
    
});

Route::get('/cliente/{id}', function ($id) {
    $articulo = Cliente::find($id)->articulo;
    return $articulo;
});

Route::get('/clientes/{id}',function($id){
    $articulos = Cliente::find($id)->articulos->where('precio','<=',10);;
    return $articulos;
});
Route::get('/articulo/{id}',function($id){

        $cliente = Articulo::find($id)->cliente->where('pais','España');
        return $cliente;
});

Route::get('/perfilInsert/{nombre}',function($nombre){

    $perfil = new Perfil();
    $perfil->nombre=$nombre;

    $perfil->save();

});
Route::get('/leerPerfil',function(){
    return Perfil::where("id",1)->get();
});

Route::get('/leerPerfilCliente/{id}',function($id){
    $cliente =Cliente::find($id);
    if(isset($cliente)>0){
        foreach($cliente->perfils as $perfil){
            echo "Perfil: ".'<b>'.$perfil->nombre.'</b>'.'<br>';
        }
    }
    else{
        echo "No existe Cliente";
    }
    /*foreach($cliente->perfils as $perfil){
        echo "Perfil: ".'<b>'.$perfil->nombre.'</b>'.'<br>';
    }*/
    //return Cliente::find($id)->perfils()->orderBy("nombre","desc")->get();

    
});
//Relacion Polimorfica
Route::get('/calificacionCliente/{id}', function ($id) 
{
    
    $cliente = Cliente::find($id);
    if(isset($cliente))
    {
        foreach($cliente->calificaciones as $calificacion)
        {
            return $calificacion->calificacion;
        }
    }
    else
    {
        return "No Existe Clientes";
    }
   
});

Route::get('/calificacionArticulo/{id}', function ($id) 
{
    
    $articulo = Articulo::find($id);
    if(isset($articulo))
    {
        foreach($articulo->calificaciones as $calificacion)
        {
            return $calificacion->calificacion;
        }
    }
    else
    {
        return "No Existe Clientes";
    }
   
});