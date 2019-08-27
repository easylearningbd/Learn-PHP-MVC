

<div class="serchoption">
	<div class="menu">
  <a href="<?php echo BASE_URL; ?>"> Home </a>
	  </div>
	
	<div class="search">
		<form action="<?php echo BASE_URL; ?>/Index/search" method="post">
			<input type="text" name="keyword" placeholder="Search From here.." />

			<select class="catsearch" name="cat">
				<option> Select One </option>
				

<?php  
 foreach ($catlist as $key => $cat) {
 	 

 ?>
				<option value="<?php echo $cat['id'] ?>"> <?php echo $cat['name']; ?> </option>
				 
			<?php  } ?>
			</select>

			<button class="submitbtn" type="submit"> Search </button>
			
		</form>
		
	</div>

</div>