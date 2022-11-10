<?php

class ProductsByCategorieModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_store;charset=utf8', 'root', '');
    }

    /*Devuelve la lista de productos por categoria*/
    function getProductsByCategorie($id) {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare('SELECT products.*, categories.nombre as categoria FROM products JOIN categories ON products.id_categorie_fk = categories.id_categorie WHERE id_categorie=?');
        //SELECT products.*, categories.nombre as Categoría FROM products JOIN categories ON products.id_categorie_fk = categories.id_categorie WHERE id_categorie=?');
        //SELECT products.*, categories.nombre as Categoría FROM products JOIN categories ON products.id_categorie_fk = customer.id_categorie"');
        $query->execute([/*$nombre, */$id]);//products.name_product, categories.nombre as Categoria, nombre FROM products, categories WHERE products.id_categorie=categories.id_categorie and (nombre="pintura")

        // 3. obtengo los resultados
        $productosPorCategoria = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $productosPorCategoria;
//SELECT products.*, categories.nombre as Categoría FROM products JOIN categories ON products.id_categorie_fk = categories.id_categorie WHERE id_categorie=1
    }

    
}    
    
 