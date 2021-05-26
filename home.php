<?php 
include_once('head.php');
include_once('navbar.php');
session_start(); 
if ( !$_SESSION['login']){
  header('Location: login.php');
  die;

 
}
?>
 
 <section class="about text-center h-100">
  
  <div  >
          <h1 class="home-title pt-5">LEARN PROGRAMMING LAGUAGES </h1>
          <div class="text-justify pl-5 pr-5 pt-5 home-text">
           <h5> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit dignissimos quisquam rerum aliquam quasi vitae nisi expedita debitis cupiditate asperiores optio eveniet labore, vel beatae!</h5>
          </div>
        
      </div>
    </div>
    <div class=" container  ">

    <div class="row justify-content-center card-items">

    <div class="card col-md m-4">
              <img class="card-img-top" src="./ressources/imgs/cover.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="articles.php?categorie=front-end" class="btn btn-primary">Go </a>
              </div>
            </div>
        

          
            <div class="card col-md m-4">
              <img class="card-img-top" src="./ressources/imgs/backend.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <a href="articles.php?categorie=back-end" class="btn btn-primary">Go </a>
              </div>
            </div>

    </div>
          
            
          
      
    </div>
 </section>



<?php
include_once('footer.php');
include_once('foot.php');
?>