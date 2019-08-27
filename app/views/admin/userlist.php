 <h3>User List</h3> <hr/>

  <?php 

 
if (!empty($_GET['msg'])) {
	$msg = unserialize(urldecode($_GET['msg']));
 foreach ($msg as $key => $value) {
 echo "<span style='color:blue; font-weight:bold'>".$value."</span>";
 }
 
}  
  ?>
 
  <table class="tblone">
  	<tr> 
<th>Serial </th>
<th> User Name </th>
<th>  Level </th>
<th>  Action </th>
  	</tr>


<?php


$i = 0;
   foreach ($users as $key => $value) {
   $i++;
  ?>

<tr>
	<td> <?php echo $i; ?>  </td>
	<td> <?php echo $value['username']; ?> </td>
	<td> 

		<?php 
		 
         if ($value['level'] == 1) {
         	echo "Admin";
         } elseif ($value['level'] == 2) {
         	echo "Author";
         }else {
         	echo "Contributor";
         }
         

		 ?> 
		  </td>
	<td> 
		<a onclick="return confirm('Are you sure to delete!');" href="<?php echo BASE_URL; ?>/User/deleteUser/<?php echo $value['id'] ?>"> Delete </a>

	</td>


</tr>

<?php    }  ?>



  </table>