<?php
namespace CheckoutController;

//require_once './models/Cart.php';
require_once './vendor/autoload.php';

use CartModel\Cart;
use SeoModel\Seo;
use ClearModel\Clear;

class CheckoutController {

protected $model_cart;
protected $model_seo;
protected $model_clear;

public function __construct()
{
   $this->model_cart = new Cart;   
   $this->model_seo = new Seo;
   $this->model_clear = new Clear;
}

public function actionStart()
{
   $carts = $this->model_cart->funcStart();	
   $title = $this->model_seo->funcTitle();
   require_once './views/checkout/view.php';
}

public function actionRemoveCart()
{
   $this->model_cart->funcRemoveCart();	
   header('location:?page=checkout');
}

public function actionRemoveCartOne($id)
{
   $this->model_cart->funcRemoveCartOne($id);	
   header('location:?page=checkout');
}

public function toClearCart()
{
   $this->model_clear->funcClear();	
   // header('location:?page=checkout');
}

}

?>
