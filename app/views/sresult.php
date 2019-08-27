
 
  <article class="postcontent">
<?php
 foreach ($postbysearch as $key => $value) {
   ?>
    <div class="post">
      <h2> <a href="<?php echo BASE_URL; ?>/Index/postDetails/<?php echo $value['id']; ?>"> <?php echo $value['title'];  ?> </a> </h2>
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

