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
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search About DHS">
          <button style="margin-top: 8px" class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
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
      <?php
  if (isset($_POST['update_added'])) {
  $errors = array();

  $required_field = array('menu_name', 'content');
  foreach ($required_field as $filedname) {
    if (!isset($_POST[$filedname]) || empty($_POST[$filedname])) {
      $errors[] = $filedname;
    }
  }

  $field_with_length = array('menu_name' => 80, 'content' => 500);
  foreach ($field_with_length as $filedname => $max_length) {
    if (strlen(trim($_POST[$filedname])) > $max_length) {
      $errors[] = $filedname;
    }
  }

  $menu_name = $_POST['menu_name'];
  $content = $_POST['content'];

  if (empty($errors)) {
    global $connection;
    $query = "INSERT INTO pages( 
      menu_name,  content) 
      VALUES(
      '{$menu_name}', '{$content}')";
    $result = mysqli_query($connection, $query);
    if ($result) {
      echo "<center><b> Update Created Sucessfully</b></center>";
    } else {
      echo "Subject Creation failed ".mysqli_error($connection);
    }
  }
}
?>
    <h3>Add Latest Update : </h3>
    <?php if (!empty($message)) { echo "<p class=\"errors\">{$message}</p>"; } ?>
    <?php if (!empty($errors)) { echo "<p class=\"errors\">Please review the following field : <br />";
                            foreach ($errors as $error) {echo "- {$error}<br />"; } echo "</p>";} ?>
    <br style="clear:both;" />
    <form action="addupdate.php" method="POST">
        <div style="width:220px; float:left;"><p>Update Heading:</p></div>
        <div style="width:630px; float:right;"><p><input class="contact" type="text" name="menu_name" value="" /></p></div>
        </p></div>
        <div style="width:220px; float:left;"><p>Update Content:</p></div>
        <div style="width:630px; float:right;">
        <p><textarea style="border-color: brown" class="contact textarea" rows="8" cols="50" name="content"></textarea></p></div>
        <br style="clear:both;" />
        <div style="width:630px; float:right;">
            <input class="submit" type="submit" name="update_added" value="Add" /> 
            <button><a href="dashboard.php">Cancel</a></button></p></div>
    </form>
    <br style="clear:both;" />
		
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