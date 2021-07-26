<html>
<head>
<title>IYA ABUBAKAR INSTITUTE OF INFORMATION AND COMMUNICATION TECHNOLOGY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
body{
  color: black;
}
	input[type=text]{
		color: black;
		align-items: left;	
		width:250px;
	}
	input[type=password]{
		color: black;
		align-items: left;	
		width:250px;
	}
	input:focus{
		border-color: green;
		border: ridge;
		border-shadow: 3px, 5px, red;
	}
	input{
		color: black;
	}
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
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
    <h3><a href="">IYA ABUBAKAR INSTITUTE OF INFORMATION AND COMMUNICATION TECHNOLOGY</a></h3>
      <p></p>
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
	<div class="rounded" align="center">
  <img src="images/abu.png" style="width:200px; height: 70px; float:left"/>
  <img src="images/iyaa.png" style="width:200px; height: 70px; float:right"/>
  <form action="checkadmission.php" method="POST">
		<p style="color: black; font-family: cursive; font-weight: bolder"> CHECK ADMISSION STATUS </p>
		Email: <br><input id="emails" type="email" value="" placeholder="Email Id" required="" autofocus="autofocus" name="uname">
    <br> <br>
		<input style="float: left; margin-left: 400px; margin-top: -25px" type="submit" value="Check Admission" name="submit">
	</form>
	</div>
  <?php
  session_status();
    require_once ("config.php"); 
    if(isset($_REQUEST['submit']))
    {
    $a = $_REQUEST['uname'];
    $res = mysqli_query($connection, "select* from admittedstud where email='$a' and status=1");
    $result=mysqli_fetch_array($res);
    if($result > 0){      
      $work = $result['email'];
      $r = mysqli_query($connection, "select* from students where email='$work' ");
      
    while($row1 = mysqli_fetch_array($r)){
      echo "<table>".
      "<tr>".
      "<td colspan='2'  style='text-align:center;  font-weight:bolder;'>[Admission Status] <br>
     <font-color:green;> CONGRATULATIONS! YOU HAVE BEEN OFFERED ADMISSION </td>".
      "</tr>".
      "<tr>".
      "<td>First Name</td>".  
      "<td>" . $row1['firstname'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Last Name</td>".  
      "<td>" . $row1['lastname'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Middle Name</td>".  
      "<td>" . $row1['middlename'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Email</td>".  
      "<td>" . $row1['email'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Gender</td>".  
      "<td>" . $row1['gender'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Marital Status</td>".  
      "<td>" . $row1['mstatus'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Address</td>".  
      "<td>" . $row1['address'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>State of Origin</td>".  
      "<td>" . $row1['state'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Local Government</td>".  
      "<td>" . $row1['lg'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Phone Number</td>".  
      "<td>" . $row1['phone'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Country</td>".  
      "<td>" . $row1['country'] . "</td>" .
      "</tr>".
      "<tr>".
      "<td>Program Admitted</td>".  
      "<td>" . $row1['program'] . "</td>" .
      "</tr>".
      "</table>".
      "<center>".
      "<button class='btn btn-success' style='width:100px; height:40px; background-color:green; color:white' onclick='window.print();' name='print'>Print</button>".
      "</center>";
    }
      session_unset();
      exit();
    }
    else	
    {
      echo '<script>';
      echo 'alert("Sorry! You have not been Offered with an Admission Yet")';
      echo '</script>';
      
    }
    }
  ?>
<hr size="100px">
<!-- ################################################################################################ -->
	
<!-- ################################################################################################ -->
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>