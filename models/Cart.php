<?php
namespace CartModel;

class Cart {

public $link_db;
public $row_db;
public $action_patch;

public function __construct()
{
   require './config/config.php';
   $link = new \PDO('mysql:host=' . $db_host . ';dbname=' . $db_name, $db_user, $db_password);
   $query = "set names utf8";
   $pstmt = $link->prepare($query);
   $pstmt->execute();
   $this->link_db=$link;
   $this->action_patch = $action_patch;
}

public function funcToCart($name, $price, $image)
{
  $query = "insert into cart(name, price, image) values(:name, :price, concat('images/', :image))";
  $pstmt = $this->link_db->prepare($query);
  $pstmt->bindParam(':name', $name, \PDO::PARAM_STR);
  $pstmt->bindParam(':price', $price, \PDO::PARAM_STR);  
  $pstmt->bindParam(':image', $image, \PDO::PARAM_STR);    
  return $pstmt->execute();
}

public function funcStart()
{
   $query = "select id, name, price, image from cart";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcRemoveCart()
{
  $query = "delete from cart";
  $pstmt = $this->link_db->prepare($query);
  return $pstmt->execute();
}

public function funcRemoveCartOne($id)
{
  $query = "delete from cart where id=:id";
  $pstmt = $this->link_db->prepare($query);
  $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);  
  return $pstmt->execute();
}

}

?>
