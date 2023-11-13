<?php
require_once('vendor/autoload.php');

use Controllers\ProductController;

$productController = new ProductController;

echo $productController->getAllProduct();
