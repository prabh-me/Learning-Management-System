<!DOCTYPE html>
<html lang="en">
<head>
<title>Student's Site | Sitemap</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/tabs.css">
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/register.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page6" onLoad="document.getElementById('tab1').style.display='none';
document.getElementById('tab2').style.display='none';">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
<?php
$con='';
$sql1='';
$sql2='';
?>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li>Learning Management System</li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div><br><br>
        	<button style="float:right" type="button" onClick="logout()" >Logout</button> <br><br><br>
        </fieldset>
      </form>
    </div>
  </header>
  
   <script>
	   
	   function logout()
{
window.location.assign("http://localhost/ss/index.html");
}
       </script>
 
  
  <div class="container">
    
    <section id="content">
      
      <div class="inside">
        <h2>List of Courses:</h2><br>
		<ol>
<li><a href="cg.html"><h3>1) Computer Graphics</li></h3></a><hr>
<li><a href="ada.html"><h3>2) Algorithms Design and Analysis</li></a><hr></h3>
<li><a href="#"><h3>3) Operating Systems</li></h3></a><hr><br><br>
<h3>Future courses:</h3>

<?php
 $con=mysqli_connect("127.0.0.1","root","","mini");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
session_start();
$n11=$_SESSION['email'];
$sql11 = "SELECT * FROM learner WHERE email='$n11'";
$result11=mysqli_query($con,$sql11);
if ($result11) {
    while($row11 = mysqli_fetch_array($result11))
    {$n12 = $row11['opt'];     
	}
}

$sql1 = "SELECT * FROM course WHERE spl='$n12'";

$result1 = mysqli_query($con,$sql1);
if ($result1) {
    while($row1 = mysqli_fetch_array($result1))
    {
		echo $row1['name'];
		echo "<br>";
		echo "Link of contents of course: ".$row1['link'];
		echo "<br>";
		echo "<br>";
    /*$spl1 = $row1['spl'];
    $spl2= $row1['name'];
    $spl3= $row1['content'];
    $spl4= $row1['author'];
    $spl5= $row1['trainer'];
    $spl6= $row1['description'];
    echo "$spl1 "."$spl1";
	echo "&emsp"."$spl2"."&emsp"."$spl3"."&emsp"."$spl4"."&emsp"."$spl5"."&emsp"."$spl6";
    echo "<br>"; */    
	}
}
mysqli_close($con);
?>
</ol>
        </div>
    </div>
    </section>
  </div>
</div>

    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
