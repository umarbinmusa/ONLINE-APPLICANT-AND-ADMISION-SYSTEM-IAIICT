<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>IYA ABUBAKAR INSTITUTE OF INFORMATION AND COMMUNICATION TECHNOLOGY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h3><a href="#">IYA ABUBAKAR INSTITUTE OF INFORMATION AND COMMUNICATION TECHNOLOGY</a></h3>
      <p></p>
    </div>
    <div class="fl_right">
    <!--
    <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search About IAIICT">
          <button style="margin-top: 8px" class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    -->
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 

<!-- ################################################################################################ -->
	<div class="rounded">
        <div id="add-staff-sec" style="color: black; border-style: ridge; padding: 5px; border-radius: 5px; border-color: blue; overflow-x:auto;">
        <hr>
        <?php
	require_once 'config.php';
	if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$program = $_POST['program'];
	$country = $_POST['country'];
	$gender = $_POST['gender'];
	$mstatus = $_POST['mstatus'];
	$bloodgroup = $_POST['bloodgroup'];
	$firstname =$_POST['firstname'];
	$lastname= $_POST['lastname'];
	$middlename= $_POST['middlename'];
	$email= $_POST['email'];
	$address= $_POST['address'];
	$state=$_POST['state'];
	$lg= $_POST['lg'];
	$phone=$_POST['phone'];
#	$passport = $_SESSION['passport'];
	$query="INSERT INTO `students` (`username`, `password`, `program`, `country`, 
                      `gender`, `mstatus`, `bloodgroup`, `firstname`, `lastname`, 
                      `middlename`, `email`, `address`, `state`, `lg`, `phone`) 
  VALUES ('$username','$password','$program','$country','$gender','$mstatus','$bloodgroup',
          'firstname','$lastname', '$middlename','$email','$address',
          '$state','$lg','$phone')";
    
    if (mysqli_query($connection, $query)){
        echo "<h3> Application Form Submitted Sucessfully</h3>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
	}

}
?>
      <div id="content">
        <div class="content_item">
            <h2><center>Fill Out with Correct Values</center></h2>
          	
            <p><strong><h3 style="color: red">Login Information*</h3></strong></p>
            <form method="POST" action="apply.php" enctype="multipart/form-data">
            <div style="width:200px; float:left; font-weight: bolder; font-size: 17px;"><p>User Name:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="text" name="username" value="" /></p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left; font-weight: bolder; font-size: 17px;"><p>Password:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="password" name="password" value="" /></p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left; font-weight: bolder; font-size: 17px;"><p>Confirm Password:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="password" name="c_password" value="" /></p></div>
            <br style="clear:both;" />
            
            <p><strong><h3 style="color: red">Program Information*</h3></strong></p>
            <div style="width:200px; float:left; font-weight: bolder; font-size: 17px;"><p>Name of Program:</p></div>
			<div style="width:630px; float:right;"><p>
			<select style="border-radius: 5px; width: 100%; height: 35px;" name="program">
			<option>Select Program</option>
			<option>Diploma in Computer Science</option>
			<option>Diploma in Computer Engineering</option>
			</select>
			</p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Country:</p></div>
			       <div style="width:630px; float:right;"><p>
			       <select style="border-radius: 5px; width: 100%;" name="country">
				       <option>Select Country</option>
				       <option>Nigeria</option>
				       <option>Others</option>
			       </select>
			       </p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Gender:</p></div>
			<div style="width:630px; float:right;">
			<input required="" type="radio" name="gender" value="male" checked />Male
            <input required="" type="radio" name="gender" value="female" />Female
			</div>
            <br style="clear:both;" >
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Maritial Status:</p></div>
			<div style="width:630px; float:right;"><p>
			<select style="border-radius: 5px; width: 100%; height: 35px;" name="mstatus">
				<option></option>
				<option>Single</option>
				<option>Married</option>
			</select>
			</p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Blood Group:</p></div>
			<div style="width:630px; float:right;"><p>
			<select style="border-radius: 5px; width: 100%; height: 35px;" name="bloodgroup">
				       <option>Select Blood Group</option>
				       <option>A+</option>
				       <option>A</option>
				       <option>B</option>
				       <option>O+</option>
				       <option>O</option>
			</select>
			</p></div>
            <br style="clear:both;" />
			<p><strong><h3 style="color: red">Personal Information*</h3></strong></p>
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>First Name:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="text" name="firstname" value="" /></p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Last Name:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="text" name="lastname" value="" /></p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Middle Name:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="text" name="middlename" value="" /></p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Email Address:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="text" name="email" value="" /></p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Residential Address:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="text" name="address" value="" /></p></div>
            <br style="clear:both;" />
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>State:</p></div>
			<div style="width:630px; float:right;  height: 35px; font-weight: bolder; font-size: 17px"><p>
			<select style="border-radius: 5px; width: 100%; height: 35px;" name="state">
				<option>Select State</option>
				<option>Abia</option>
				<option>Adamawa</option>
				<option>Akwa Ibom</option>
				<option>Anambra</option>
				<option>Bauchi</option>
				<option>Bayelsa</option>
				<option>Enugu</option>
				<option>Gombe</option>
				<option>Kaduna</option>
				<option>Kano</option>
				<option>Katsina</option>
				<option>FCT</option>
				<option>Jigawa</option>
				<option>Borno</option>
			</select>
			</p></div>
            <br style="clear:both;" />
			<br>
			<div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Local Government:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="text" name="lg" value="" /></p></div>
            <br style="clear:both;" />
            <br>
            <div style="width:200px; float:left;  height: 35px; font-weight: bolder; font-size: 17px"><p>Phone Number:</p></div>
			<div style="width:630px; float:right;"><p><input style="border-radius: 5px; width: 100%; height: 35px;" required="" type="number" name="phone" value="" /></p></div>
            <br style="clear:both;" />
			<br>
      <br style="clear:both;" />
      <div style="width:630px; float:right;"><p style="padding-top: 15px"><input class="submit" type="submit" name="submit" value=" Submit " />&nbsp;&nbsp;<a><input class="submit" type="submit" name="cancel" value="Cancel"/></a></p></div>
      </form>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
<hr>
      <!-- ################################################################################################ -->
      <!--
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="images/demo/worldmap.png" alt="">
          <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      -->
      <div class="one_third">
        <address>
        IAIICT,<br>
        A.B.U, Samaru<br>
        Kaduna State<br>
        Postcode/Zip<br>
        <br>
        <i class="fa fa-phone pright-10"></i> +234 XXXX XXXXX<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="">iaiict@helpdesk.abu.edu.ng</a>
        </address>
      </div>
      <div class="one_third">
        <img src="images/iyaa.png" width="200px"/> 
      </div>
      <!--
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With IAIICT</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
        <form class="clear" method="post" action="#">
          <fieldset>
            <legend>Subscribe To IAIICT Newsletter:</legend>
            <input type="text" value="" placeholder="Enter Email Here&hellip;">
            <button class="fa fa-sign-in" type="submit" title="Sign Up"><em>Sign Up</em></button>
          </fieldset>
        </form>
      </div>
      -->
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">iaiict.abu.edu.ng</a></p>
    <p class="fl_right">Designed & Developed by <a href="https://www.dansadaucodingsite.blogspot.com">IAIICT Class of 2021</a></p>
    <!-- ################################################################################################ --> 
    
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>