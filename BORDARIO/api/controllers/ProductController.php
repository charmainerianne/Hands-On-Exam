<?php

require_once "repositories/ProductRepository.php";
require_once "repositories/interface/IProductRepository.php";
require_once "config/Database.php"; 
require_once "config/Router.php";

class ProductController {
    private IProductRepository $productRepository;

    public function __construct() {
        $this->productRepository = new ProductRepository();
    }

    public function GetAllProduct() {
        // Return All ProductId, ProductName, ProductPrice, ProductDate and its Prices
        echo json_encode($this->productRepository->GetAllProduct());
    }
    

    public function GetLatestPriceOfTheProduct() {
        // Return Products with Latest Price
        echo json_encode($this->productRepository->GetLatestPriceOfTheProduct());
    }
    
    public function GetProductById($productId) {
        echo json_encode($this->productRepository->GetProductById($productId));
    }
}
