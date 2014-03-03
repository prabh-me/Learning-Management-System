<html>
<body>
Welcome  Login  <br>
<?php

 $con=mysqli_connect("127.0.0.1","root","","mini");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();

   }
   session_start();
   $n1=$_POST['email'];
   $_SESSION['email']=$n1;
   echo $n1;
$n2=$_POST['password'];
echo "<br>";
echo $n2;
echo "<br>";

   //$Fname=$n1+$n2;
   //$m = $_POST['txtMobile'];
   //$n=$_POST['txtStudentEmail'];

   //$sql = "INSERT INTO user (email,sname,contact) VALUES ($m,$Fname,$n,)";
  // $query = $conn->prepare($sql);
                //$n1 = mysql_real_escape_string($n1);
//$n2 = mysql_real_escape_string($n2);
             //       $result=null;
$sql1="SELECT srno FROM trainer WHERE email='$n1' and password='$n2'";//sand password='$n2'";
$result1=mysqli_query($con,$sql1);
                 $s1=0;

$sql2="SELECT srno FROM learner WHERE email='$n1' and password='$n2'";//sand password='$n2'";
$result2=mysqli_query($con,$sql2);
                 $s2=0;

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($result1) {
    while($row1 = mysqli_fetch_array($result1))
    {     $s1=$s1+1;
   }
   if($s1>0)
   {   
	header('Location: trainer_course.html');  
   }
elseif ($result2) {
    while($row2 = mysqli_fetch_array($result2))
    {     $s2=$s2+1;
   }
   if($s2>0)
   {   
	header('Location: http://localhost/ss/courses.php');  
   }
   else {
 	  header('Location: register.html');
   }
}
else {
 	  header('Location: register.html');
   }

}
mysqli_close($con);
 ?>
</body>
</html>