<?php
//require_once './controllers/StartController.php';
require_once './vendor/autoload.php';

use CheckoutController\CheckoutController;

$controller=new CheckoutController();

// require_once './views/selectedaction.php';
$controller->toClearCart();
?>
