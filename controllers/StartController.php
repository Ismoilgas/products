<?php
namespace StartController;

//require_once './models/Product.php';
//require_once './models/Api.php';
require_once './vendor/autoload.php';

use ProductModel\Product;
use ApiModel\Api;
use SeoModel\Seo;
use MailerModel\Mailer;

class StartController {

protected $model_product;
protected $model_api;
protected $model_seo;
protected $model_mailer;

public function __construct()
{
   $this->model_product = new Product;
   $this->model_api = new Api;
   $this->model_seo = new Seo;
   $this->model_mailer = new Mailer;
}

public function actionStart()
{
   if(isset($_SESSION['products']) && $_SESSION['products']) {
      $products = $_SESSION['products'];
      $_SESSION['products'] = '';
   }
   else {
      if(isset($_SESSION['message_validate']) && $_SESSION['message_validate']) {
         $message_validate = $_SESSION['message_validate'];
         $_SESSION['message_validate'] = '';
      }
      $products = $this->model_product->funcStart();
      $title = $this->model_seo->funcTitle();
   }
   require_once './views/start/view.php';
}

public function actionSearchProducts()
{
   //$products = $this->model_product->funcSearchProducts($_POST['search_input']);
   if($this->model_product->searchValidate($_POST['search_input'])) {
      $_SESSION['products'] = $this->model_product->funcSearchProducts($_POST['search_input']);
   } else {
      $_SESSION['message_validate'] =  $this->model_product->error_validation;
   }
   //require_once './views/start/view.php';
   header('location:?page=start');
}

//MailerNews
public function actionMailerNews()
{
   if($this->model_api->mailerValidate($_POST['message'], $_POST['contact'])) {
      // $res['success'] = $this->model_api->funcMailerNews($_POST['message'], $_POST['contact']);
      $res['success'] = $this->model_mailer->funcToMailer($_POST['message'], $_POST['contact']);

   }
   else {
      $res['error'] = $this->model_api->error_validation;
   }
   echo json_encode($res);
}

public function toMail()
{
   $letters = $this->model_mailer->funcStart();
   // print_r($letters);
   if(count($letters)){
   foreach($letters as $letter){
      $this->model_api->funcMailerNews($letter['message'], $letter['contact']);   
   }
   $this->model_mailer->funcRemoveMailer();
}
}   

}

?>
