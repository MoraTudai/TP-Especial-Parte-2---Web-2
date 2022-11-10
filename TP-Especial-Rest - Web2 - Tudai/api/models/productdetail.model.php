<?php

class ProductDetailModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_store;charset=utf8', 'root', '');
    }

    /*Devuelve el detalle de cada producto*/
    function getProductDetail($id) {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare('SELECT products.*, categories.nombre as categoria FROM products JOIN categories ON products.id_categorie_fk = categories.id_categorie WHERE id_product=?');
        $query->execute([$id]);//SELECT products.*, categories.nombre as categoria FROM products JOIN categories ON products.id_categorie_fk = categories.id_categorie WHERE id_product=?;

        // 3. obtengo los resultados
        $detalleProducto = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $detalleProducto;

    }

    
}    
  