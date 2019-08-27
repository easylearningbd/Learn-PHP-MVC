 <?php
/**
*  User Model 
*/
class UserModel extends DModel {
	
	public function __construct(){
		parent::__construct();
	}

  public function userList($table){
  	$sql = "select * from $table order by id desc";
  	return $this->db->select($sql);
 	  
  }

 public function addUser($table, $data){
     return $this->db->insert($table, $data);
  }
   


 public function userById($table, $id){

    $sql = "select * from $table where id=:id";
    $data = array(":id" => $id);
    return $this->db->select($sql, $data);
 }
 
  public function insertUser($table, $data){
     return $this->db->insert($table, $data);
  }
   

   public function userUpdate($table, $data, $cond){
    return $this->db->update($table, $data, $cond);
   }

 

  public function delUser($table, $cond){
   return $this->db->delete($table, $cond);
 }



}


?>