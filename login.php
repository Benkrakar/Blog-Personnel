<?php 
include_once('head.php');
include_once('dbConnection.php');
session_start();

if(isset($_POST['submit'])){
  $Username =  $_POST['username'];
  $Password =  $_POST['password'];
  
if ($person->login($Username,$Password)){

              
}else {
?>
<div class="p-3   bg-secondary text-white text-center">incorrect informations</div>



<?php
}
}


?>
<section class="login-section">
  <div class="d-flex h-75 w-100  ">
    <div class="d-flex justify-content-center col my-auto">
      <div class="login-form">
      </div>

      <div class="container form-login text-center pt-4 pb-4">
        <div class="col-12 login-img mb-5 mt-5">
          <img class="imgg" src="./ressources/imgs/hero@2x.png" alt="">
          </div>
          <div class="col-12 login-title mb-5">
            <h2>BENKRAKAR WALID</h2>
          </div>
          <div class="col-12 form-input ">
          <form  method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
              <input type="text" name="username" id="username" class="form-contol text-center" placeholder="username"  >
              </div>
              <div class="form-group">
              <input type="password" name="password" id="password" class="form-contol text-center" placeholder="password" >
              </div>
              <button type="submit" name="submit" id="loginbtn" class="btn login-btn btn-success mt-2">
              Login
              </button>
            </form>
            </div>
          
      </div>

    </div>
    
 </div>
  </div>
</section>
<!-- <script src="./scripts.js"></script> -->


<?php 
include_once('foot.php');
?>