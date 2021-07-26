<?php require_once ("../includes/session.php");?>
<?php confirm_logged_in(); ?>
<?php require_once ("../includes/connection.php");?>
<?php require_once ("../includes/functions.php");?>
<?php require ("header_admin.php");?>
	  <div id="content">
        <div class="content_item">
		  <h1>Welcome To Counselling Students List</h1>
	      <p><ol>
	      	<?php
	      		$query = "SELECT * 
	   				FROM students";
     			$student_set = mysqli_query($connection, $query);
	      		confirm_query($student_set);

	      		while ($student = mysqli_fetch_array($student_set)) {
					  echo "<table border='1'>".
							 "<td>" .
							 "<li>".
					  " {$student['lastname']} {$student['middlename']}  |  {$student['gender']}  |  
					  {$student['program']}  </td>".
					  	 "</li>".
						 "</table>";
	   			}
	   		?>
	      </ol></p>  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
<?php require ("footer_admin.php");?>