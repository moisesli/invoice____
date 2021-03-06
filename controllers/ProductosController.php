<?php

namespace Controllers;

use Config\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductosController extends Controller
{

  public function index()
  {
    include './views/productos/index.php';
  }

  public function getid(Request $request, $id){
      $res = $this->conn->query("
        select
        productos.id as id,
        productos.unidad_id as unidad_id,
        productos.codigo as codigo,
        productsheader.nombre as nombre,
        productos.detalle as detalle,
        productos.precio_sin_igv as precio_sin_igv,
        productos.precio_con_igv as precio_con_igv,
        productos.igv as igv,
        unidades.codigo as ucodigo,
        productsheader.stock as stock
        from productos
        inner join productsheader on productos.productoheader_id = productsheader.id
        inner join unidades on productos.unidad_id = unidades.id
        where productos.id='$id'
      ")->fetch_object();
      return $this->resjson([
          'success' => true,
          'item' => $res
      ]);
  }

  public function store(Request $request){
    //print_r($request->toArray()['nombre']);
    $data = $request->toArray();
    $this->conn->query("insert into productsheader (nombre, stock, unidad_id) values 
    ('{$data['nombre']}',{$data['stock']},{$data['unidad_id']})");
    // Last Id
    $last_id = $this->conn->insert_id;
    $this->conn->query("
      insert into productos (codigo, precio_sin_igv, precio_con_igv, igv, unidad_id, productoheader_id, detalle) values
      ('{$data['codigo']}', {$data['precio_sin_igv']}, {$data['precio_con_igv']}, {$data['igv']}, {$data['unidad_id']}, $last_id, '')
    ");
    return $this->resjson([
      'success' => true,
    ]);
  }

  public function list()
  {
    $res = $this->conn->query("
        select
          productos.id as id,
          productos.codigo as codigo,
          productsheader.nombre as nombre,
          productos.detalle as detalle,
          productos.precio_sin_igv as precio_sin_igv,
          productos.precio_con_igv as precio_con_igv,
          productos.igv as igv,
          unidades.codigo as ucodigo,
          productsheader.stock as stock
        from productos
             inner join productsheader on productos.productoheader_id = productsheader.id
             inner join unidades on productos.unidad_id = unidades.id
      ")->fetch_all(MYSQLI_ASSOC);

    //print_r(json_encode($res,true));
    return $this->resjson([
      'suceess' => true,
      'items' => $res
    ]);
  }

  public function new()
  {
    $this->view('productos.new');
  }

  public function edit(Request $request, $id)
  {
    $idd = 'moises';
    $this->header();
    include './views/productos/edit.php';
    $this->footer();
    //$this->view('productos.edit');
  }

  public function update()
  {

  }

  public function delete()
  {

  }
}
