<?php
session_start();
error_reporting(0);
require_once "../config.php";
  
if(isset($_REQUEST["submit"]))
{
    
 $aid=$_POST['uname'];
 $apwd=$_POST['pass'];
 if($aid!='' && $apwd!='')
 {
   $query=mysqli_query($connection ,"select * from admin where username='".$aid."' and password='".$apwd."'");
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['ad']=$aid;
    header('location:dashboard.php');
   }
   else
   {
     echo '<script>';
    echo 'alert("Invalid Login ! Please try again.")';
    echo '</script>';

   }
 }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }
}
?>

<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>IYA ABUBAKAR INSTITUTE OF INFORMATION AND COMMUNICATION TECHNOLOGY</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
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
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <!--
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Help</a></li>
      </ul>
    </nav>
    -->
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
    <h3><a href="../">IYA ABUBAKAR INSTITUTE OF INFORMATION AND COMMUNICATION TECHNOLOGY</a></h3>
      <p></p>
    </div>
    <div class="fl_right">
    <!--
    <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search About DHS">
          <button style="margin-top:8px;" class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
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
        <li class="active"><a href="../index.php">Home</a></li>
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
  <form action="index1.php" method="POST">
		<p style="color: black; font-family: cursive; font-weight: bolder"> ADMIN LOGIN </p>
		STAFF ID: <br><input id="emails" type="text" value="" placeholder="Admin Id" required="" autofocus="autofocus" name="uname">
		PASSWORD <br><input type="password" value"" placeholder="Password" required="" autofocus="autofocus" name="pass"> <br> <br>
		<input style="float: left; margin-left: 400px; margin-top: -25px" type="submit" value="Login" name="submit"> 
		<input style="float: right; margin-right: 400px; margin-top: -25px" type="reset" value="Reset"> 
	</form>
	</div>
<hr size="100px">
<!-- ################################################################################################ -->
	
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
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
        <img src="../images/iyaa.png" width="200px"/> 
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