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
   $n1=$_POST['email'];
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
$sql="SELECT srno FROM user WHERE email='$n1' and password='$n2'";//sand password='$n2'";
$result=mysqli_query($con,$sql);
                 $s=0;
// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($result) {
    while($row = mysqli_fetch_array($result))
    {     $s=$s+1;
   }
   echo "Please register.";
   if($s>0)
   {   
	header('Location: courses.html');  
   }
   else {
   echo "Please register.";
   }
}
else {
    echo "Please register.";
}
mysqli_close($con);
 ?>

</body>
</html>