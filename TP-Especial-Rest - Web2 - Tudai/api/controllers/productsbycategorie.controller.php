<?php

require_once './app/models/productsbycategorie.model.php';
require_once './app/views/productsbycategorie.view.php';
require_once './app/helpers/auth.helper.php';


class ProductsByCategorieController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new ProductsByCategorieModel();
        $this->view = new ProductsByCategorieView();
        $this->authHelper = new AuthHelper();

    }
    
    public function productsByCategorie($id) {
        $productosPorCategoria = $this->model->getProductsByCategorie($id);//, $name_product, $size, $color, $price);
        $this->view->showProductsByCategorie($productosPorCategoria);
    }
    
  }