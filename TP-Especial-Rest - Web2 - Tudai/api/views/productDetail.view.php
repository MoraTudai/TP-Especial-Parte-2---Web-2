<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductDetailView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }
    
    function showProductDetail($detalleProducto) {
        // asigno variables al tpl smarty
       $this->smarty->assign('count', count($detalleProducto));
       $this->smarty->assign('detalleProducto', $detalleProducto); 

        // mostrar el tpl
        $this->smarty->display('productDetail.tpl');
    }

}