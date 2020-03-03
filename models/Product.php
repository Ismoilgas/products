<?php
namespace ProductModel;

//require_once './Valitron/Validator.php'; //!!!
require_once './vendor/autoload.php';

use Valitron\Validator as V; //!!!

class Product {

public $link_db;
public $row_db;
public $action_patch;
public $error_validation; //!!!

public function __construct()
{
   require './config/config.php';
   $link = new \PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
   $query = "set names utf8";
   $pstmt = $link->prepare($query);
   $pstmt->execute();
   $this->link_db=$link;
   $this->action_patch = $action_patch;
   V::langDir('./validator_lang'); // always set langDir before lang.  //!!!
   V::lang('en');
}

public function funcStart()
{
   $query = "select id, name, price, image from products where top9=1";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcSelectProduct($id)
{
   $query = "select id, name, price, image from products where id=:id";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcSearchProducts($search)
{
   $query = "select id, name, price, image from products where name like concat('%', :search, '%')";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':search', $search, \PDO::PARAM_STR);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function searchValidate($search)
{
   $v = new V(array('search' => $search));
   $v->rule('required', array('search'));
   $result_validate=$v->validate();
   $this->error_validation=$v->errors();
   return $result_validate;
}

}

?>
