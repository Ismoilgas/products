<?php
namespace CartController;

//require_once './models/Product.php';
//require_once './models/Cart.php';
require_once './vendor/autoload.php';

use ProductModel\Product;
use CartModel\Cart;
use SeoModel\Seo;

class CartController {

protected $model_product;
protected $model_cart;
protected $model_seo;

public function __construct()
{
   $this->model_product = new Product;
   $this->model_cart = new Cart;   
   $this->model_seo = new Seo;
}

public function actionCartProduct($id)
{
   $product = $this->model_product->funcSelectProduct($id);	
   $title = $this->model_seo->funcTitle();
   require_once './views/cart/view.php';
}

public function actionToCart()
{
   $this->model_cart->funcToCart($_POST['name'], $_POST['price'], $_POST['image']);	
   header('location:?page=checkout');
}

}

?>
