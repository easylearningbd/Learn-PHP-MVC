
  
  <article class="postcontent">
<?php
 foreach ($getcat as $key => $value) {
   

?>


    <div class="post">

<div class="title"> 
<h2><?php echo $value['title'] ?> </h2>
  <p> Category :   <?php echo $value['name'] ?>   </p>
  </div>  
       <p>
        <?php 

        $text = $value['content']; 
        if (strlen($text) > 200) {
          $text = substr($text, 0, 200);
          echo $text;
         } 


        ?></p>
      <div class="readmore"><a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"> Read More.. </a></div>
  

    </div>


 
    <?php  } ?>
  </article>



