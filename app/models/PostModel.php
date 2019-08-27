<?php
/**
*  Post Model 
*/
class PostModel extends DModel {
	
	public function __construct(){
		parent::__construct();
	}
 
  public function getAllPost($table){
  	$sql = "select * from $table order by id desc limit 4";
  	return $this->db->select($sql);
 	    }


    public function PostById($tablePost, $id){
    $sql = "select * from $tablePost where id=$id";
    return $this->db->select($sql);
      }


    public function getPostList($table){
    $sql = "select * from $table order by id desc";
    return $this->db->select($sql);
      }


      public function getPostById($tablePost, $tableCat, $id){
     $sql = "SELECT $tablePost.*, $tableCat.name From $tablePost
     INNER JOIN $tableCat
     ON  $tablePost.cat = $tableCat.id
     WHERE  $tablePost.id = $id  ";
    return $this->db->select($sql);

      }



      public function getPostBycat($tablePost, $tableCat, $id){
     $sql = "SELECT $tablePost.*, $tableCat.name From $tablePost
     INNER JOIN $tableCat
     ON  $tablePost.cat = $tableCat.id
     WHERE  $tableCat.id = $id  ";
    return $this->db->select($sql);


      }
 

  public function getlatestPost($table){
    $sql = "select * from $table order by id desc limit 5";
    return $this->db->select($sql);
  }


 public function getPostBysearch($tablePost, $keyword, $cat){

  if (empty($keyword) && $cat == 0) {
    header("Location:".BASE_URL."/Index/home");
  }
  
 if (isset($keyword) && !empty($keyword)) {
   $sql = "SELECT * FROM $tablePost WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";
 }elseif (isset($cat)) {
  $sql = "SELECT * FROM $tablePost WHERE cat = $cat";
 }

   
    return $this->db->select($sql);
 }

    public function insertPost($table, $data){
     return $this->db->insert($table, $data);
  }

   public function updatePost($table, $data, $cond ){
    return $this->db->update($table, $data, $cond);
   }

   public function delPostById($table, $cond){
   return $this->db->delete($table, $cond);
 }
 

}


?>