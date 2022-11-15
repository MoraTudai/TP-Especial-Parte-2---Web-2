<?php

require_once './api/models/product.model.php';
require_once './api/views/api.view.php';

class ApiProductController {
    private $model;
    private $view;

    private $data;

    public function __construct() {
        $this->model = new ProductModel();
        $this->view = new ApiView();

        // lee el body del request
        $this->data = file_get_contents("php://input");//info que llega por URL
        //Permite leer la entrada enviada en formato RAW.
        //Es un string de los datos crudos
        //No importa que verbo se usó (GET, POST, PUT...)
    }

    private function getData() {//porqué es private???Supongo que para que no se pueda acceder desde afuera, esa función es sólo para nosotros.
        return json_decode($this->data);
        //transforma el crudo recibido a formato JSON
    }
    
    function getAll($params = null){
        $sort = $_GET['name_product'] ?? null;
        $order = $_GET['order'] ?? null;

        if (isset($sort) && isset($order)) {    
            $sort_ = array("name_product", "size", "color", "price", "id_categorie_fk");
            $order_ = array("asc", "desc");
            if (!in_array($_GET['sort'], $sort_) && !in_array($_GET['order'],$order_)){
                $this->view->response("No es posible realizar la acción",400);
            }
            else{
            $sort = $_GET['sort'];
            $order = $_GET['order'];
                
            $productos = $this->model->getByOrder($sort, $order);    
                if ($productos){
                    $this->view->response($productos);
                }
                else{
                    $this->view->response("No se encontraron productos con esas características",400);
                }
            }    
        }
        else{
            $productos = $this->model->getAll();
            $this->view->response($productos);
        }
    }
   
        
      /*
    }else if (isset($_GET['page']) && isset($_GET['limit']))
    {
      $page = $_GET['page'];
      $limit = $_GET['limit'];
      $page = (int)$page;
      $limit = (int)$limit;
      $offSet = ($limit * $page) - $limit;
      $movies = $this->model->getByPagination($offSet,$limit);
      if ($movies)
      {
        $this->view->response($movies);
      }else
      {
        $this->view->response("No se encontraron peliculas",404);
      }
    }else if (isset($_GET['filter']) && isset($_GET['value'])){
      $filters = array("id_gender_fk");
      if (in_array($_GET['filter'],$filters)){
        $filter = $_GET['filter'];
        $value = $_GET['value'];
        $movies = $this->model->getByFiltering($filter,$value);
        if ($movies){
          $this->view->response($movies);
        }
      }
    }
    
  }
        }
*/


public function get($params = null) {
    //obtengo el id del arreglo de params
    $id = $params[':ID'];//si hubieramos utilizado más parametros en el ruter: 
    //$parametro1 = $params[':PARAMETRO1'];
    $producto = $this->model->get($id);

    if ($producto){
        $this->view->response($producto);
    }
    else{//si no existe devuelvo código de error 404
        $this->view->response("El producto con el id: $id no existe", 404);
    }
}

    /*public function getOrderBy($params = null) {
        $id = $params[':ID'];
        $orderBy = $params[':ORDERBY'];
        $productosOrdenados = $this->model->getOrderBy($id, $orderBy);

        $this->view->response($productosOrdenados, 200);
    }*/
    

    public function insert($params = null){
        $producto = $this->getData();

        if (empty($producto->name_product) || empty($producto->size) || empty($producto->color) || empty($producto->price) || empty($producto->id_categorie_fk)){ 
            $this->view->response("Complete los campos obligatorios", 400);
        }
        else{
            $id = $this->model->insert($producto->name_product, $producto->size, $producto->color, $producto->price, $producto->id_categorie_fk, $producto->description);
            $producto = $this->model->get($id);
            $this->view->response($producto, 201);
        }
    }

    public function delete($params = null){
        $id = $params[':ID'];
        $producto = $this->model->get($id);
    if ($producto){
        $this->model->delete($id);
        $this->view->response($producto, 200);
    }
    else{
        $this->view->response("El producto con el id:" . $id . " no existe", 404);
    }

    }

    public function edit($params = []){
        $id_product = $params[':ID'];
        $producto = $this->model->get($id_product);

        if($producto){
            $body = $this->getData();
            $name_product = $body->name_product;
            $size = $body->size;
            $color = $body->color;
            $price = $body->price;
            $id_categorie_fk = $body->id_categorie_fk;
            $description = $body->description;
            $product = $this->model->edit ($id_product, $name_product, $size, $color, $price, $id_categorie_fk, $description);
            $this->view->response("Producto con el id= $id_product actualizada con éxito");
        }
        else{
            $this->view->response("Product with id= $id_product not found", 404);
        }
    }
}