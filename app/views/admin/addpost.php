
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<h3>Add New Article </h3> <hr/>
  


  <form action="<?php echo BASE_URL;?>/Admin/addNewPost" method="post">
  <table>
       <tr>
    <td> Title   </td>
    <td> <input type="text" name="title" required="1" /> </td>
       </tr>

         <tr>
    <td> Content  </td>
    <td> 
<textarea name="content"></textarea>
    <script>
      CKEDITOR.replace( 'content' );
    </script>


    </td>
       </tr>

   <tr>
    <td> Category </td>
    <td> 
     <select name="cat" class="cat">
    <option>  Select One </option>

   <?php 
   foreach ($catlist as $key => $cat) {
      
   ?>
    <option value="<?php echo $cat['id']; ?>"> <?php echo $cat['name']; ?>   </option>
  <?php   } ?>

       </select>

     </td>
       </tr>



         <tr>
    <td>   </td>
    <td> <input type="submit" name="submit" value="Add Article"> </td>
       </tr>


  </table>


</form>