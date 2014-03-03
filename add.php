      <?php
	$fromID='';
	  $spl='';
	  $name='';
	  
$con=mysqli_connect("127.0.0.1","root","","mini");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   session_start();
   $row2='';
   $row1='';
$n1=$_POST['desc'];
$n2=$_POST['name'];
$n3=$_POST['author'];
$n4=$_SESSION['email'];
$sql1 = "SELECT * FROM trainer WHERE email = '$n4'";
$result1 = mysqli_query($con,$sql1);
//while($row = mysql_fetch_array($result1,MYSQLI_NUM)) {
  //  $fromID = $row['name'];
//}                 $s1=0;
if ($result1) {
    while($row1 = mysqli_fetch_array($result1))
    {$spl = $row1['spl'];     
	 $name = $row1['name'];	
	}
}
 
echo"<br>";
$sql3 = "INSERT INTO course (trainer,spl,author,name,description) VALUES ('$name','$spl','$n3','$n2','$n1')";
$result3=mysqli_query($con,$sql3);

/*  echo "$name";
echo"<br>";
  echo "$spl";
echo"<br>";
  echo "$n1";
echo"<br>";
  echo "$n2";
echo"<br>";
  echo "$n3";
echo"<br>";
  echo "$n4";
  echo "$fromID";       
echo"<br>";
  echo "$sql1";
echo"<br>";
  echo "$sql2";
echo"<br>";
  echo "$sql3";
          $s1=0;
*/
session_start();
	$_SESSION['course']=$n2;
if ($result3) {
       
	header('Location: trainer_add.html');  
}
   else {
   	header('Location: trainer_course.html');

   }


	?>