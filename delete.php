<?php 
include_once('dbConnection.php');
$id=$_GET['delete_id'];
if ($person->delete($id)){
  header('Location: dashboard.php');
}else {
  echo ' failed';
}
?> 
