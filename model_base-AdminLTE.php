<?php
namespace BaseModel;

class Base {

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

public function funcStart()
{
   $query = "select name, address, email, phone, image, id from users";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   $this->row_db = $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcAddUser($name, $address, $email, $phone, $image)
{
  $query = "insert into users(name, address, email, phone, image) values(:name, :address, :email, :phone, concat('img/', :image))";
  $pstmt = $this->link_db->prepare($query);
  $pstmt->bindParam(':name', $name, \PDO::PARAM_STR);
  $pstmt->bindParam(':address', $address, \PDO::PARAM_STR);
  $pstmt->bindParam(':email', $email, \PDO::PARAM_STR);
  $pstmt->bindParam(':phone', $phone, \PDO::PARAM_STR);  
  $pstmt->bindParam(':image', $image, \PDO::PARAM_STR);    
  return $pstmt->execute();
}

public function funcRemoveUser($id)
{
  $query = "delete from users where id=:id";
  $pstmt = $this->link_db->prepare($query);
  $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);
  return $pstmt->execute();
}

//funcSelectImages
public function funcSelectImages()
{
   $query = "select image from images";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcSelectUser($id)
{
   $query = "select name, address, email, phone, image, id from users where id=:id";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);   
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcUpdateUser($id, $name, $address, $email, $phone, $image)
{
  $query = "update users set name=:name, address=:address, email=:email, phone=:phone, image=concat('img/', :image) where id=:id";
  $pstmt = $this->link_db->prepare($query);
  $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);  
  $pstmt->bindParam(':name', $name, \PDO::PARAM_STR);
  $pstmt->bindParam(':address', $address, \PDO::PARAM_STR);
  $pstmt->bindParam(':email', $email, \PDO::PARAM_STR);
  $pstmt->bindParam(':phone', $phone, \PDO::PARAM_STR);  
  $pstmt->bindParam(':image', $image, \PDO::PARAM_STR);  
  return $pstmt->execute();
}

}

?>
