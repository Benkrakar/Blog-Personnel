<?php 
include_once('head.php');
include_once('navbar.php');
include_once('dbConnection.php');


if (isset($_GET['article_id'])) {
  $id = $_GET['article_id'];
  extract($person->getID($id));
}
?>
<section class="about text-center ">
      <?php $person->articleview($id);?>

 </section>
 <?php
include_once('footer.php');
include_once('foot.php');
?>