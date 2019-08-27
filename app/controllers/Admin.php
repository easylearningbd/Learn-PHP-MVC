<?php

/**
* Admin Controller
*/
class Admin extends Dcontroller{
	
	public function __construct()
	{
		 parent::__construct();
		 Session::checkSession();
	} 

public function Index(){
    	$this->home();
    }


  public function home(){
   $this->load->view('admin/header');
   $this->load->view('admin/sidebar');
   $this->load->view('admin/home');
   $this->load->view('admin/footer');
  }

   public function addCategory(){
    $this->load->view('admin/header');
   $this->load->view('admin/sidebar');
   $this->load->view('admin/addcategory');
   $this->load->view('admin/footer');
 
     }




public function insertCategory(){
    $table = 'category';
    $name = $_POST['name'];
    $title = $_POST['title'];


    $data = array(
      'name' => $name, 
      'title' => $title
    );
    $catModel = $this->load->model('CatModel');
    $result = $catModel->insertCat($table, $data);
 
    
    $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "Category Added Successfully ...";
    } else {
      $mdata ['msg'] = "Category Not Added ...";
    }
       $url =  BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($mdata));
     header("Location:$url");


    }




    public function categoryList(){
   
    $this->load->view('admin/header');
   $this->load->view('admin/sidebar');
    $data = array();
    $table = 'category';
  	$catModel = $this->load->model('CatModel');
  	$data['cat'] = $catModel->catList($table);
  	 $this->load->view("admin/categorylist", $data);
  	 $this->load->view('admin/footer');
  }

  public function editCategory($id=NULL){
  	$data = array();
    $table = 'category';
     
   $this->load->view('admin/header');
   $this->load->view('admin/sidebar');
  	$catModel = $this->load->model('CatModel');
  	$data['catByid'] = $catModel->catByid($table, $id);
  	 $this->load->view("admin/editcat", $data);
  	 $this->load->view('admin/footer');
  }


public function updateCat($id=NULL){
    $table = 'category';
    $name = $_POST['name'];
    $title = $_POST['title'];

    $cond = "id=$id";
    $data = array(
      'name' => $name, 
      'title' => $title
    );

     $catModel = $this->load->model('CatModel');
     $result = $catModel->catUpdate($table, $data, $cond);
    
     $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "Category Update Successfully ...";
    } else {
      $mdata ['msg'] = "Category Not Update ...";
    }
    
    $url =  BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($mdata));
     header("Location:$url");


   }


   public function deleteCategory($id=NULL){

   	    $table = 'category';
        $cond = "id=$id";
        $catModel = $this->load->model('CatModel');
       $result =  $catModel->delCatById($table, $cond);

        $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "Category Deleted Successfully ...";
    } else {
      $mdata ['msg'] = "Category Not Deleted ...";
    }
    
    $url =  BASE_URL."/Admin/categoryList?msg=".urlencode(serialize($mdata));
     header("Location:$url");
   }




  public function addNewPost(){
   $tablePost = 'post';
   $title = $_POST['title'];
    $content = $_POST['content'];
     $cat = $_POST['cat'];


    $data = array(
      'title' => $title, 
      'content' => $content, 
      'cat' => $cat
    );
    $postModel = $this->load->model('PostModel');
    $result = $postModel->insertPost($tablePost, $data);
 
    
    $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "Article Added Successfully ...";
    } else {
      $mdata ['msg'] = "Article Not Added ...";
    }
       $url =  BASE_URL."/Admin/articleList?msg=".urlencode(serialize($mdata));
     header("Location:$url");




  }


 


   public function addArticle(){
   	$tableCat = 'category';
   $this->load->view('admin/header');
   $this->load->view('admin/sidebar');


	$catModel = $this->load->model('CatModel');
  	$data['catlist'] = $catModel->catList($tableCat);

    $this->load->view('admin/addpost', $data);
   $this->load->view('admin/footer');
   }

   public function articleList(){

   $tableCat = 'category';
   $tablePost = 'post';

   $this->load->view('admin/header');
   $this->load->view('admin/sidebar');

   $postModel = $this->load->model('PostModel');
  	$data['listPost'] = $postModel->getPostList($tablePost);

    $catModel = $this->load->model('CatModel');
  	$data['catlist'] = $catModel->catList($tableCat);
  
   $this->load->view('admin/postlist',$data);
   $this->load->view('admin/footer');
   }


  public function editArticle($id=NULL){
    $tableCat = 'category';
    $tablePost = 'post';

   $this->load->view('admin/header');
   $this->load->view('admin/sidebar');

   $postModel = $this->load->model('PostModel');
  	$data['postbyid'] = $postModel->PostById($tablePost, $id);

    $catModel = $this->load->model('CatModel');
  	$data['catlist'] = $catModel->catList($tableCat);
  
   $this->load->view('admin/editpost',$data);
   $this->load->view('admin/footer');

  }



public function updatePost($id=NULL){
    $table = 'post';
    $title = $_POST['title'];
    $content = $_POST['content'];
     $cat = $_POST['cat'];

    $cond = "id=$id";
    $data = array(
      'title' => $title, 
      'content' => $content, 
      'cat' => $cat
    );

     $postModel = $this->load->model('PostModel');
  	$result = $postModel->updatePost($table, $data, $cond);
    
     $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "Article Update Successfully ...";
    } else {
      $mdata ['msg'] = "Article Not Update ...";
    }
    
    $url =  BASE_URL."/Admin/articleList?msg=".urlencode(serialize($mdata));
     header("Location:$url");

   }


   public function deleteArticle($id=NULL){

   	    $table = 'post';
        $cond = "id=$id";
        $postModel = $this->load->model('PostModel');
       $result =  $postModel->delPostById($table, $cond);

        $mdata = array();
     if ($result == 1) {
     $mdata ['msg'] = "Article Deleted Successfully ...";
    } else {
      $mdata ['msg'] = "Article Not Deleted ...";
    }
    
    $url =  BASE_URL."/Admin/articleList?msg=".urlencode(serialize($mdata));
     header("Location:$url");
   }


 
}


?> 