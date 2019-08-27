<aside class="adminleft">
    <div class="widget">
    <h3> Site Option </h3>
    <ul>
      <li><a href="<?php echo BASE_URL; ?>/Admin"> Home </a> </li>
      <li><a href="<?php echo BASE_URL; ?>/Login/logout"> Logout </a> </li>
    </ul>  
    </div>

<?php if (Session::get('level') != 2 && Session::get('level')!= 3 ) {
  
 ?>

  <div class="widget">
    <h3> Manage User  </h3>
    <ul>
      <li><a href="<?php echo BASE_URL; ?>/User/makeUser"> Make User</a> </li>
      <li><a href="<?php echo BASE_URL; ?>/User/listUser"> User List </a> </li>
    </ul>  
    </div>

<?php } ?> 



<?php if (Session::get('level') != 3 ) {
 
 ?>
       <div class="widget">
    <h3> Category Option </h3>
    <ul>
      <li><a href="<?php echo BASE_URL; ?>/Admin/addCategory"> Add Category </a> </li>
      <li><a href="<?php echo BASE_URL; ?>/Admin/categoryList"> Cateogry List </a> </li>
    </ul>  
    </div>
<?php } ?> 

       <div class="widget">
    <h3> Post Option </h3>
    <ul>
      <li><a href="<?php echo BASE_URL; ?>/Admin/addArticle"> Add Article </a> </li>
      <li><a href="<?php echo BASE_URL; ?>/Admin/articleList"> Article List </a> </li>
    </ul>  
    </div>





  </aside>

  <article class="adminright">