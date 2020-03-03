<?php
namespace MailerModel;

class Mailer {

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

public function funcToMailer($message, $contact)
{
  $query = "insert into mailer(message, contact) values(:message, :contact)";
  $pstmt = $this->link_db->prepare($query);
  $pstmt->bindParam(':message', $message, \PDO::PARAM_STR);
  $pstmt->bindParam(':contact', $contact, \PDO::PARAM_STR);  
  return $pstmt->execute();
}

public function funcStart()
{
   $query = "select id, message, contact from mailer";
   $pstmt = $this->link_db->prepare($query);
   $pstmt->execute();
   return $pstmt->fetchAll(\PDO::FETCH_ASSOC);
}

public function funcRemoveMailer()
{
  $query = "delete from mailer";
  $pstmt = $this->link_db->prepare($query);
  return $pstmt->execute();
}
/*
public function funcRemoveCartOne($id)
{
  $query = "delete from cart where id=:id";
  $pstmt = $this->link_db->prepare($query);
  $pstmt->bindParam(':id', $id, \PDO::PARAM_INT);  
  return $pstmt->execute();
}*/

}

?>
