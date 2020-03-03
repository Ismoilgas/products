<?php
session_start();
if(isset($_GET['page'])) {$patch = 'views/' . $_GET['page'] . '/index.php';}
else {$patch = 'views/start/index.php';}
require_once $patch;
?>
