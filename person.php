<?php
    //------------------------------------------------------cnct fct---------------------------------------------------------------------------------

class PersonDB{
    private $db;
    public function __construct($conn){
        $this -> db=$conn;
    }

    //---------------------------------------------------------------------------------------------------------------------------------------------


    //------------------------------------------------------creat fct---------------------------------------------------------------------------------
    public function creat($articleName,$categorie,$Description,$Datedecreation,$Img,$Textz){ 
        try {
            $stmt=$this->db->prepare("INSERT INTO `articles`(`ArticleName`, `catégorie`, `description`, `datedecreation`, `img`, `text`) VALUES (:name , :categorie , :description , now() , :img , :text)");
            $stmt->bindparam(':name',$articleName);
            $stmt->bindparam(':categorie',$categorie);
            $stmt->bindparam(':description',$Description);
            $stmt->bindparam(':text',$Textz);
            $stmt->bindparam(':img',$Img);
            $stmt->execute();
              return true;
                } catch (PDOException $e)  {
                    echo 'ERR 1 :'. $e->getMessage()." ||||| ";
                    return false;
                }
    }

    public function update($id,$articleName,$categorie,$Description,$Datedecreation,$Img,$Textz){
        try {
        $stmt=$this->db->prepare("UPDATE `articles` SET `ArticleName`=:name, `catégorie`=:categorie, `description`=:description, `datedecreation`= now(), `img`=:img, `text`=:text WHERE  `ID`=:id");
            $stmt->bindparam(':name',$articleName);
            $stmt->bindparam(':categorie',$categorie);
            $stmt->bindparam(':description',$Description);
            $stmt->bindparam(':text',$Textz);
            $stmt->bindparam(':img',$Img);
         $stmt->bindparam(":id",$id);

        $stmt->execute();
        return true;
        } catch (PDOException $e)  {
            echo 'ERR 2 : ||| '. $e->getMessage()." ||| ";
            return false;
        }
    }

    public function delete($id){
        $stmt=$this->db->prepare("DELETE FROM `articles` WHERE `ID`=:id");
        $stmt->bindparam(":id",$id);
        $stmt->execute();
        return true;
    
    }



    public function getID($id){
        $stmt=$this->db->prepare("SELECT * FROM `articles` WHERE ID =:id");
        $stmt->execute(array(":id"=>$id));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }


   
                
    public function dataview(){
        $stmt=$this->db->prepare("SELECT * FROM `articles` WHERE 1");
        $stmt->execute();
            if ($stmt->rowCount()>0){
                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){         //to get the informtions in assoc array
                    ?>
                   <tr>

                        <th ><?php echo $row['ID'];?></th>
                        <td><?php echo $row['ArticleName'];?></td>
                        <td><?php echo $row['catégorie'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td><?php echo date("d-m-Y", strtotime( $row['datedecreation']));?></td>
                        
                        <td>
                                <a class="icon fa fa-edit" href="edit.php?edit_id=<?php echo $row['ID'];?>"></a>
                                <a  href="delete.php?delete_id=<?php echo $row['ID'];?>" id="button"  class="icon fa fa-trash pl-2" > </a>
                                                
                        </td>
                    </tr>
                    <?php
                }
            }
    }
    public function articlesview(){
    $stmt=$this->db->prepare("SELECT * FROM `articles` WHERE 1");
    $stmt->execute();
        if ($stmt->rowCount()>0){
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){         //to get the informtions in assoc array
                ?>
                    <div class="card articles ml-3 mt-4 mb-4" style="width: 18rem;">
                <img class="card-img-top" src="./ressources/imgs/<?php echo $row['img'];?>" alt="Card image cap">
                
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['ArticleName'];?></h5>
                        <p class="card-text"><?php echo $row['description'];?></p>
                        <a href="article.php?article_id=<?php echo $row['ID'];?>" class="btn btn-primary">read</a>
                    </div>
            </div>               
                <?php
            }
        }
}
    public function articleview($id){
        $stmt=$this->db->prepare("SELECT * FROM `articles` WHERE id=$id");
        $stmt->execute();
            if ($stmt->rowCount()>0){
                $row=$stmt->fetch(PDO::FETCH_ASSOC)         //to get the informtions in assoc array
                    ?>
                <div >
                <h1 class="home-title pt-5"><?php echo $row['ArticleName'];?> </h1>
                
                </div>
                <div class="d-flex justify-content-center col my-auto ">
                        <div class="article-sec mt-5 row  p-3">
                        <div class="article-img justify-content-sm-between d-flex">
                            <img src="./ressources/imgs/<?php echo $row['img'];?>" alt="">
                            <p class="text-justify pl-3"><?php echo $row['description'];?> </p>
                        </div>
                        <div>
                            <p class="text-justify mt-3"><?php echo $row['text'];?></p>
                        </div>
                        </div>
                </div>             
                    <?php
                }
            }   


    public function login($Username,$Password){
        $stmt=$this->db->prepare("SELECT * FROM `users` WHERE `username`=:user and `password`=:pass");
        $stmt->bindparam(":user",$Username);
        $stmt->bindparam(":pass",$Password);
        $stmt->execute();

            if( $stmt->rowCount () == 1){
                $_SESSION['login'] = TRUE;
                header('Location: home.php');

            }
    
            
    }        




    }





 

            
            
    



// instantiation creation dun objet dapres un class
//polymorphisme
?>
