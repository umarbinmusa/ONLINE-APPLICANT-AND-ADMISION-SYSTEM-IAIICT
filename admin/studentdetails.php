<!DOCTYPE html>
<html>
<head>

<title>IYA ABUBAKAR INSTITUTE OF INFORMATION AND COMMUNICATION TECHNOLOGY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
<img src="../images/iya.png" style="width:1000px; height:50px"/>
<hr>
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="dashboard.php">Back</a></li>
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
        
        <li class="active"><a href="logout.php" style="">LOG OUT</a></li>
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
    
	<div class="rounded">
    <?php 
      require_once '../config.php';
        $txtquery = "select username from admin";
            $rslt = mysqli_query($connection, $txtquery);
            while($row = mysqli_fetch_array($rslt)){
              $username = $row['username'];
            }
          ?>
          <label for="text" style="color:black;"><b> USER: <?php echo $username?></b><label> <br>
          <div id="add-staff-sec" style="color: black; border-style: ridge; padding: 5px; border-radius: 5px; border-color: blue; overflow-x:auto;">
                <h1 style="font-size: 20px; font-family: Arial Black">STUDENT LIST</h1>
                <hr>
    <?php
      require_once '../config.php';
      $sql1 = "Select * from students order by id asc";
      $result1=mysqli_query($connection, $sql1);  
      echo "<table>
      <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Middle Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Address</th>
      <th>State</th>
      <th>Local Govt.</th>
      <th>Phone No</th>  
      <th>Username</th>
      <th>Password</th>
      </tr>";
    while($row1 = mysqli_fetch_array($result1)){
        echo "<tr>";
        echo "<td>" . $row1['firstname'] . "</td>";
        echo "<td>" . $row1['lastname'] . "</td>";
        echo "<td>" . $row1['middlename'] . "</td>";
        echo "<td>" . $row1['email'] . "</td>";
        echo "<td>" . $row1['gender'] . "</td>";
        echo "<td>" . $row1['address'] . "</td>";
        echo "<td>" . $row1['state'] . "</td>";
        echo "<td>" . $row1['lg'] . "</td>";
        echo "<td>" . $row1['phone'] . "</td>";
        echo "<td>" . $row1['username'] . "</td>";
        echo "<td>" . $row1['password'] . "</td>";
            "</td>";
        echo "</tr>";
    }
    ?>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
  
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>