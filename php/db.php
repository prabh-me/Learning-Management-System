<html>
<body>
Welcome  Registration Successful
<?php

 $con=mysqli_connect("127.0.0.1","root","","mini");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();

   }
echo "<br>";
$n1=$_POST['fname'];
$n2=$_POST['lname'];
$n3=" ".$n1." ".$n2;
echo "<br>";
echo $n3;
echo "<br>";
$n4=$_POST['email'];
echo "<br>";
echo $n4;
echo "<br>";
$n5=$_POST['password'];
echo "<br>";
echo $n5;
$n6=$_POST['contact'];
echo "<br>";
echo $n6;
$n7=$_POST['gender'];
echo "<br>";
echo $n7;
$n8=$_POST['type'];
echo "<br>";
echo $n8;

   //$Fname=$n1+$n2;
   //$m = $_POST['txtMobile'];
   //$n=$_POST['txtStudentEmail'];

 $sql = "INSERT INTO user (srno,email,name,contact,password,gender,type) VALUES (0,'$n4','$n3',$n6,'$n5','$n7','$n8')";

   //$query = $conn->prepare($sql);

//$sql = "INSERT INTO user (email,sname,MOBILE) VALUES (:n1,$n3,:m)";
//$q = $conn->prepare($sql);
//echo (





//$query->bindParam(":n1", $_POST["fname"],PDO::PARAM_STR);
//$query->bindParam(":n2", $_POST["fname2"],PDO::PARAM_STR);
//$query->bindParam(":m", $_POST["contact"],PDO::PARAM_INT);
//$query->execute();

  $result = mysqli_query($con,$sql);
      //  $i=0;
      if($result)
      {
        echo"record inserted found ";
		header('Location: index.html');  
      }
      else
      {
        echo"Unsuccessful";
      }
                    //$z=array('fdf','dfd','dff');
    //    while($row = mysqli_fetch_array($result))
//   {
 //}
mysqli_close($con);
 ?>

</body>
</html>