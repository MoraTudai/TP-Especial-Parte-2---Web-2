<?php

class ProductModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_store;charset=utf8', 'root', '');
    }

    /*Devuelve la lista de tareas completa*/
    public function getAllProducts() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare('SELECT products.*, categories.nombre as categoria FROM products JOIN categories ON products.id_categorie_fk = categories.id_categorie');
        $query->execute();         //SELECT products.*, categories.nombre as categoria FROM products JOIN categories ON products.id_categorie_fk = categories.id_categorie

        // 3. obtengo los resultados
        $productos = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $productos;
    }

    public function get($id){
        $query = $this->db->prepare("SELECT * FROM products WHERE id_product = ?");
        $query->execute([$id]);
        $producto = $query->fetch(PDO::FETCH_OBJ);

        return $producto;
    }
    
    /*Inserta un producto en la base de datos*/
    function insertProduct($name_product, $size, $color, $price, $id_categorie_fk){
        $query = $this->db->prepare("INSERT INTO products (name_product, size, color, price, id_categorie_fk) VALUES ( ?, ?, ?, ?, ?)");
        $query->execute([$name_product, $size, $color, $price, $id_categorie_fk]);      

        return $this->db->lastInsertId();
    }

    public function editProduct($id, $name_product, $size, $color, $price, $id_categorie_fk) {
        $editarproductos = $this->db->prepare("UPDATE products SET name_product = ?, size = ?, color = ?, price = ?, id_categorie_fk = ? WHERE id_product=?");
        //('UPDATE products SET name_product=?, size=?, color=?, price=?, id_categorie_fk=? WHERE id_product = ?');
        $editarproductos->execute([$name_product, $size, $color, $price, $id_categorie_fk, $id]); //nombre-de-la-columna = valor[, nombre-de-la-columna=valor]
        //var_dump($query->errorInfo()); // y eliminar la redireccion
        return $editarproductos;
    }

    /*Elimina un producto dado su id*/
    function delete($id_product) {//consulta desde SQL -> DELETE FROM `products` WHERE `products`.`id_product` = 22;
        $query = $this->db->prepare('DELETE FROM products WHERE id_product = ?');
        $query->execute([$id_product]);
    }

}
