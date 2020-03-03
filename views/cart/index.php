<?php
//require_once './controllers/CartController.php';
require_once './vendor/autoload.php';

use CartController\CartController;

$controller=new CartController();

require_once './views/selectedaction.php';
?>
