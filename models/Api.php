<?php
namespace ApiModel;

//require_once './Valitron/Validator.php'; //!!!
require_once './vendor/autoload.php';

use Valitron\Validator as V; //!!!

class Api {

public $error_validation; //!!!

public function __construct()
{
   V::langDir('./validator_lang'); // always set langDir before lang.  //!!!
   V::lang('en');
}

public function funcMailerNews($message, $contact)
{
$title = 'Your message from shop.com - ' . date('d-m-Y H:i:s');
$message = 'Message: <b>' . $message . '</b><br>';
$message .= 'Contact: <b>' . $contact . '</b><br>';
require './config/config.php';
//return json_decode(file_get_contents('http://api.25one.com.ua/api_mail.php?email_to=' .urlencode($myemail). '&title=' .urlencode($title). '&message=' . urlencode($message)));
$client = new \GuzzleHttp\Client([
   'headers' => [
       //'Authorization' => '9267585bb333341dc049321d4e74398f',
       //'Content-Type' => 'application/json',
    ]
]);
$response = $client->request('GET', 'http://api.25one.com.ua/api_mail.php?email_to=' . $myemail . '&title=' . $title . '&message=' . $message,
 [
    //...
 ]);    
return json_decode($response->getBody()->getContents());  
}

public function mailerValidate($message, $contact)
{
   $v = new V(array('message' => $message, 'contact' => $contact));
   $v->rule('required', array('message', 'contact'));
   $result_validate=$v->validate();
   $this->error_validation=$v->errors();
   return $result_validate;
}

}

?>
