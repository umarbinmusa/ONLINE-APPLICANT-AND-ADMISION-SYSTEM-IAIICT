<?php require_once ("../includes/session.php");?>
<?php confirm_logged_in(); ?>
<?php require ("header_admin.php");?>
<?php
	$sum = 0;
	$query = "SELECT * FROM students";
	$result = mysqli_query($connection, $query);
	while ($students = mysqli_fetch_array($result)) {
		//$sum = $sum + $students['fee'];
	}
?>
	  <div id="content">
        <div class="content_item">
		  <h1>Welcome <?php echo $_SESSION['username'];?></h1>
		  
	      <div class="content_container">
		  <h3>Admission Deatils</h3>
		  <p>Total Admissions so far : <?php echo "(" . mysqli_num_rows($result). ")"; ?></p>
		  </div><!--close content_container-->

		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
<?php require ("footer_admin.php");?>