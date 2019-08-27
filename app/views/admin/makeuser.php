 <h3>Add New User</h3> <hr/>
  


  <form action="<?php echo BASE_URL;?>/User/addNewUser" method="post">
  <table>
       <tr>
    <td> User Name  </td>
    <td> <input type="text" name="username" required="1" /> </td>
       </tr>

         <tr>
    <td> Password  </td>
    <td> <input type="text" name="password" required="1" /> </td>
       </tr>


  <tr>
    <td> User Roles </td>
    <td> 
   <select name="level" class="cat"> 
    <option> Select User Role </option>
     <option value="2"> Author </option>
      <option value="3"> Contributor </option>
        

   </select>
     </td>
       </tr>




         <tr>
    <td>   </td>
    <td> <input type="submit" name="submit" value="Save"> </td>
       </tr>


  </table>


</form>