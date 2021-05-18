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
            $stmt=$this->db->prepare("INSERT INTO `articles`(`ArticleName`, `catégorie`, `description`, `datedecreation`, `img`, `text`) VALUES (:name , :categorie , :description , :date , :img , :text)");
            $stmt->bindparam(':name',$articleName);
            $stmt->bindparam(':categorie',$categorie);
            $stmt->bindparam(':description',$Description);
            $stmt->bindparam(':date',$Datedecreation);
            $stmt->bindparam(':img',$Img);
            $stmt->bindparam(':text',$Textz);
            $stmt->execute();
              return true;
                } catch (PDOException $e)  {
                    echo 'ERR 1 :'. $e->getMessage()." ||||| ";
                    return false;
                }
    }

    public function update($id,$articleName,$categorie,$Description,$Datedecreation,$Img,$Textz){
        try {
        $stmt=$this->db->prepare("UPDATE `articles` SET `ArticleName`=:name, `catégorie`=:categorie, `description`=:description, `datedecreation`=:date, `img`=:img, `text`=:textWHERE  `ID`=:id");
            $stmt->bindparam(':name',$articleName);
            $stmt->bindparam(':categorie',$categorie);
            $stmt->bindparam(':description',$Description);
            $stmt->bindparam(':date',$Datedecreation);
            $stmt->bindparam(':img',$Img);
            $stmt->bindparam(':text',$Textz);
         $stmt->bindparam(":id",$id);

        $stmt->execute();
        return true;
        } catch (PDOException $e)  {
            echo 'ERR 2 : ||| '. $e->getMessage()." ||| ";
            return false;
        }
    }
    public function getID($id){
        $stmt=$this->db->prepare("SELECT * FROM `articles` WHERE id=:id");
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
                        <th><?php echo $row['ID'];?></th>
                        <td><?php echo $row['ArticleName'];?></td>
                        <td><?php echo $row['catégorie'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td><?php echo $row['datedecreation'];?></td>
                        
                        <td>
                            <a class="pr-2" name="modal" data-mdb-ripple-color="dark" data-toggle="editModal" data-target="#editModal" href="?aricle_id=<?php echo $row['ID'];?>" > <i class="icon fa fa-edit"></i> </a>
                            <a class="pl-2"   > <i class="icon fa fa-trash"></i> </a>
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
                    <div class="card articles ml-3" style="width: 18rem;">
                <img class="card-img-top" src="./ressources/imgs/bootstrap.png" alt="Card image cap">
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
                            <img src="./ressources/imgs/bootstrap.png" alt="">
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
    }





 

            
            
    



// instantiation creation dun objet dapres un class
//polymorphisme
?>
