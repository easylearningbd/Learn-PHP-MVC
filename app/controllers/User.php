
<?php
/**
*  User Controller 
*/
class User extends Dcontroller{
	
	function __construct()
	{
		parent::__construct();
	}


	public function Index(){
		$this->makeUser();
	}

   public function makeUser(){
   $this->load->view('admin/header');
   $this->load->view('admin/sidebar');
   $this->load->view("admin/makeuser");
  	 $this->load->view('admin/footer');

   }


  public function addNewUser(){
  if (!($_POST)) {
     header("Location:".BASE_URL."/User");
  }

   $table = 'tbl_user';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
     $level = $_POST['level'];


    $data = array(
      'username' => $username, 
      'password' => $password, 
      'level' => $level
    );
    $UserModel = $this->load->model('UserModel');
  	$result = $UserModel->addUser($table, $data);
 
    
    $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "User Added Successfully ...";
    } else {
      $mdata ['msg'] = "User Not Added ...";
    }
       $url =  BASE_URL."/User/listUser?msg=".urlencode(serialize($mdata));
     header("Location:$url");


  }



 public function listUser(){
   $this->load->view('admin/header');
   $this->load->view('admin/sidebar');
    $data = array();
    $table = 'tbl_user';

  	$UserModel = $this->load->model('UserModel');
  	$data['users'] = $UserModel->userList($table);
  	 $this->load->view("admin/userlist", $data);
  	 $this->load->view('admin/footer');
   	
   }



   public function deleteUser($id=NULL){

   	    $table = 'tbl_user';
        $cond = "id=$id";
       $userModel = $this->load->model('UserModel');
       $result =  $userModel->delUser($table, $cond);

        $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "User Deleted Successfully ...";
    } else {
      $mdata ['msg'] = "User Not Deleted ...";
    }
    
    $url =  BASE_URL."/User/listUser?msg=".urlencode(serialize($mdata));
     header("Location:$url");
   }


}

?>