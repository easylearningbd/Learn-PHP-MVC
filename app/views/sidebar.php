<aside class="sidebar"> 
  <div class="widget">
    <h2> Category  </h2>
    <ul>

<?php  
 foreach ($catlist as $key => $value) {

?>
      <li><a href="<?php echo BASE_URL; ?>/Index/postByCat/<?php echo $value['id'] ?>">  <?php echo $value['name'] ?> 
      </a>  </li>

      <?php  } ?>
    </ul>
  </div>


    <div class="widget">
    <h2> Latest Post   </h2>
    <ul>
<?php  
 foreach ($latestPost as $key => $value) {

?>
      
      <li><a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"> <?php echo $value['title'];  ?> </a> </li>
      <?php  } ?>

    </ul>
  </div>



</aside>