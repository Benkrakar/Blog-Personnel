<?php 
include_once('head.php');
include_once('navbar.php');
include_once('dbConnection.php');
session_start(); 
if ( !$_SESSION['login']){
  header('Location: login.php');
  die;
}
$categorie = $_GET['categorie'];

?>

 <section class="article-card sec text-center ">
  
  <div  >
          <h1 class="home-title pt-5">LEARN PROGRAMMING LAGUAGES </h1>
          <div class="text-justify pl-5 pr-5 pt-5 home-text">
           <h5> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!</h5>
          </div>
        
      </div>
    </div>
    <div class=" row col-12 justify-content-md-center ">
      <div class="col-8 row ">
              
      <?php $person->articlesview($categorie);?>
      
      

              
      </div>
    </div>
 </section>
 <?php
include_once('footer.php');
include_once('foot.php');
?>