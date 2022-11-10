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
        $this->data = file_get_contents("php://input");

    }

    private function getData() {//porqué es private???
        return json_decode($this->data);
    }
    
    function getAll($params = null){
        $productos = $this->model->getAllProducts();
        $this->view->response($productos, 200);
    }

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

    public function insertProduct($params = null){
        $producto = $this->getData();

        if (empty($producto->name_product) || empty($producto->size) || empty($producto->color) || empty($producto->price) || empty($producto->id_categorie_fk)){ 
            $this->view->response("Complete los campos obligatorios", 400);
        }
        else{
            $id = $this->model->insertProduct($producto->name_product, $producto->size, $producto->color, $producto->price, $producto->id_categorie_fk);
            $producto = $this->model->get($id);
            $this->view->response($producto, 201);
        }
    }

    public function delete($params = null){
        $id = $params[':ID'];
        $producto = $this->model->get($id);
    if ($producto){
        $this->model->delete($id);
        $this->view->response($producto);
    }
    else{
        $this->view->response("El producto con el id:" . $id . " no existe", 404);
    }

    }

    public function editProduct($params = []){
        $id_product = $params[':ID'];
        $producto = $this->model->get($id_product);

        if($producto){
            $body = $this->getData();
            $name_product = $body->name_product;
            $size = $body->size;
            $color = $body->color;
            $price = $body->price;
            $id_categorie_fk = $body->id_categorie_fk;
            $product = $this->model->editProduct ($id_product, $name_product, $size, $color, $price, $id_categorie_fk);
            $this->view->response("Producto con el id= $id_product actualizada con éxito", 200);
        }
        else{
            $this->view->response("Product with id= $id_product not found", 404);
        }
    }
}
