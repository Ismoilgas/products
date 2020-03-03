<?php
namespace ApiModel;

class Api {

public function funcMailerOrder($row_db)
{
$title = 'Your order from shop.com - ' . date('d-m-Y H:i:s');
$message = 'Marka: <b>' . $row_db[0]['marka'] . '</b><br>';
$message .= 'Model: <b>' . $row_db[0]['model'] . '</b><br>';
$message .= 'Price: <b>' . $row_db[0]['price'] . '</b>';
return file_get_contents('http://api.25one.com.ua/api_mail.php?email_to=' .urlencode($_SESSION['login']). '&title=' .urlencode($title). '&message=' . urlencode($message));
}

}

?>
