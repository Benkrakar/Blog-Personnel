<?php 
include_once('head.php');
include_once('navbar.php');
include_once('dbConnection.php');

session_start(); 
if ( !$_SESSION['login']){
  header('Location: login.php');
  die;
}
    
 
if(isset($_POST['update-btn']) && isset($_FILES['Img'])){
  $Img =  $_FILES['Img']['name'];
  $Img_size =  $_FILES['Img']['size'];
  $tmp_name =  $_FILES['Img']['tmp_name'];
  $Img_type = $_FILES['Img']['type'];
  $error =  $_FILES['Img']['error'];

  $id = $_GET['edit_id'];
  $articleName = $_POST['ArticleName'];
  $categorie = $_POST['catégorie'];
  $Description = $_POST['description'];
  $Textz = trim($_POST['textz']);

    if ($person->update($id,$articleName,$categorie,$Description,$Img,$Textz)){
      header('Location: dashboard.php');
  }
}
if (isset($_GET['edit_id'])) {
  $id = $_GET['edit_id'];
  extract($person->getID($id));
}

?> 

<section class="about ">



  <div class="pt-5 ">
        <div class=" row  justify-content-center col my-auto">
            
                  <form class="col-6 pt-5" method="POST" enctype="multipart/form-data">
  
                  
                      <div class="articl-form ">
                          <input type="text"   value="<?php echo $ArticleName;?>" class="form-control" id="recipient-name" name="ArticleName" required>
                      </div>
                       
                      <div class="articl-form mt-4">
                          <input type="text"  value="<?php echo $description;?>" class="form-control" id="recipient-name" name="description" required>
                      </div>
                      <div class="articl-form mt-4">
                        <input type="text"  value="<?php echo $datedecreation;?>" class="form-control" name="datedecreation"  required>
                    </div>
                    <div class="articl-form mt-4">
                          <label for="recipient-name" class="col-form-label">article-img</label>
                          <input type="file" name="Img" value="./ressources/imgs/<?php echo $img;?>" class="form-control" >
                      </div>
                      <div class="articl-form">
                      <textarea class="form-control mt-5" name="textz" ><?php echo $text;?></textarea>
                    </div>
                      <div class="farticl-form text-center mt-4">
                        <label for="recipient-name" class="col-form-label">categorie :</label>
                          <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="catégorie" value="front-end" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" required>
                              <label class="custom-control-label" for="customRadioInline1">Front-end</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" name="catégorie" value="back-end" id="customRadioInline2" name="customRadioInline2" class="custom-control-input" required>
                              <label class="custom-control-label" for="customRadioInline2">Back-end</label>
                          </div>
                        
                      </div>
                          <div class="d-flex justify-content-center mr-auto mt-4">
                                  <button name="update-btn" type="submitt" class="btn btn-info articl-btn " data-mdb-ripple-color="dark">done</button>
                             </div>
                  </form>
  
  
        </div>
     
      </div>
    </div>
  </div>
  </section>
  <?php
include_once('footer.php');
include_once('foot.php');
?>
