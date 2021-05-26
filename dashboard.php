<?php 
include_once('head.php');
include_once('navbar.php');

include_once('dbConnection.php');
session_start(); 
if ( !$_SESSION['login']){
  header('Location: login.php');
  die;
}

if(isset($_POST['submit']) && isset($_FILES['Img'])){
  $Img =  $_FILES['Img']['name'];
  $Img_size =  $_FILES['Img']['size'];
  $tmp_name =  $_FILES['Img']['tmp_name'];
  $Img_type = $_FILES['Img']['type'];
  $error =  $_FILES['Img']['error'];


  $articleName = $_POST['ArticleName'];
  $categorie = $_POST['catégorie'];
  $Description = $_POST['description'];
  $Datedecreation = $_POST['datedecreation'];
  $Textz = $_POST['textz'];

if ($person->creat($articleName,$categorie,$Description,$Datedecreation,$Img,$Textz)){
    header('Location: dashboard.php');

    
if(isset($_POST['update-btn'])){
  $id = $_GET['edit_id'];
  $articleName = $_POST['ArticleName'];
  $categorie = $_POST['catégorie'];
  $Description = $_POST['description'];
  $Datedecreation = $_POST['datedecreation'];
  $Textz = $_POST['textz'];

    if ($person->update($id,$articleName,$categorie,$Description,$Datedecreation,$Img,$Textz)){
      header('Location: dashboard.php');
  }
}
if (isset($_GET['edit_id'])) {
  $id = $_GET['edit_id'];
  extract($person->getID($id));
}
}
}

   
if(isset($_GET['delete-id'])){
  if(isset($_POST['delete'])){
    $id = $_GET['delete_id'];

 

if ($person->delete($id)){
  header('Location: dashboard.php');
}else {
  echo ' failed';
}
}
}

?>



<section class="about">




  <div class="modal fade  " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
    <div class="modal-dialog" role="document">
      <div class="modal-content login-informations ">
  
        <div class="modal-body ">
              <button type="button" class="close" aria-label="Close" data-dismiss="modal">
                      <span style="color:white;" aria-hidden="true">&times;</span>
                  </button>
                  <form  method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
  
                      <div class="articl-form ">
                          <input type="text"  name="ArticleName" class="form-control" id="recipient-name" placeholder="article name" required>
                      </div>
                       
                      <div class="articl-form mt-4">
                          <input type="text" name="description" class="form-control" id="recipient-name" placeholder="description" required>
                      </div>
                    
                      <div class="articl-form mt-4">
                          <label for="recipient-name" class="col-form-label">article-img</label>
                          <input type="file" name="Img" class="form-control"  >
                      </div>
                      <div class="articl-form">
                      <textarea class="form-control mt-5"  name="textz" class="form-control mt-4" id="message-text" placeholder="Hint Text for Text Area" required >

                        
                        </textarea>

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
                                  <button name="submit" type="submitt" class="btn btn-info articl-btn " data-mdb-ripple-color="dark">done</button>
                             </div>
                  </form>
  
  
        </div>
     
      </div>
    </div>
  </div>


 


  <!--------------------------------------------------------------------------------------------------------------------------------------
  --------------------------------end modal----------------------------------------------------------------------------------------------->
      
  
  
  
  <!--------------------------------------------------------------------------------------------------------------------------------------
  --------------------------------start informations page-------------------------------------------------------------------------------->

      <div class="container-fluid  dash-table">
        <h1 class="d-flex justify-content-center mr-auto pt-4">BENKRAKAR WALID</h1>

          <div class=" row col-lg-12 ">
                  <div class="ml-2 mt-5 col-lg-12 d-flex justify-content-end mb-3">
                      
                      <button type="button" class="btn btn-info articl-btn " data-mdb-ripple-color="dark" data-toggle="modal" data-target="#exampleModal" >ADD</button>
                      
                  </div>
                      <div class="login-informations p-5">
                      <table class="table ">
                          <thead>
                              <tr >
                              <th scope="col">ID</th>
                              <th scope="col">article name</th>
                              <th scope="col">catégorie</th>
                              <th scope="col">description</th>
                              <th scope="col">date de creation</th>
                              <th scope="col" >action</th>
                              </tr>
                              <?php $person->dataview();?>

                             
            
                          </tbody>
                      </table>
                      
                  </div>
                
                  </div>
              </div>
  
  
  
  
  
  
  
      </div>
</section>
<?php
include_once('footer.php');
include_once('foot.php');
?>