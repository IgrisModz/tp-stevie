<?php
require_once 'Controller.php';
require_once '../models/ProductModel.php';
require_once '../views/ProductView.php';

class ProductsController extends Controller {
  
  public function index() {
    // Récupération de la liste des produits depuis le modèle
    $productModel = new ProductModel();
    $products = $productModel->getAllProducts();
    
    // Affichage des produits dans la vue
    $productView = new ProductView();
    $productView->display('products/index', ['products' => $products]);
  }
}

?>