<?php
require_once '../vendor/autoload.php';

use App\classes\Product;

if(isset($_POST['btn']))
{
    $product = new Product($_POST, $_FILES);
    $message = $product->index();
    include 'home.php';
}

if(isset($_GET['status']))
{
    if($_GET['status'] == 'product-info')
    {
        $product = new Product();
        $productInfo = $product->getProductInfo();
        include 'product-info.php';
    }
}