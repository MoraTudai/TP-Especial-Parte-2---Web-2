<?php

require_once './app/models/productdetail.model.php';
require_once './app/views/productdetail.view.php';
require_once './app/helpers/auth.helper.php';


class ProductDetailController {
    private $model;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new ProductDetailModel();
        $this->view = new ProductDetailView();
        $this->authHelper = new AuthHelper();

    }
    
    public function showByProduct($id) {
        $detalleProducto = $this->model->getProductDetail($id);
        $this->view->showProductDetail($detalleProducto);
    }
    
  }