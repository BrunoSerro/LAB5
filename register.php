<?php
include 'db.php';

// put full path to Smarty.class.php
require('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';
$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirm = $_POST["password_confirm"]

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);

if($db) {
  // criar a instrucao de SQL para inserir o tuplo
  $tuple = "('$username', $email, $password, $password_confirm)";       
  $sql_stmt  = "INSERT INTO users VALUES $tuple";

}

?>