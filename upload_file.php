 <?php
	$sql3='';
	$link='';
	$spl='';
	  $link1='';
	  $sql5='';
	 
$con=mysqli_connect("127.0.0.1","root","","mini");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
 $n3=$_POST['file'];
echo"<br>";
session_start();
$n2=$_SESSION['course'];
$sql="SELECT content,link FROM course WHERE name='$n2'";
$result2=mysqli_query($con,$sql);
                $s1=0;
if ($result2) {
    while($row1 = mysqli_fetch_array($result2))
    {$spl = $row1['content'];
	$link1 = $row1['link'];     
	}
}
$spl=$spl+1;
$link1=$link1.", ".$n3;
$sql3 = "UPDATE course SET content ='$spl' where name = '$n2'";
$result3=mysqli_query($con,$sql3);

$sql5 = "UPDATE course SET link ='$link1' where name = '$n2'";
$result5=mysqli_query($con,$sql5);
  //echo "$name";
  echo"$n3";
$sql1="INSERT INTO content (course,link) VALUES ('$n2','$n3')";
$result3=mysqli_query($con,$sql1);

if ($result3) {
       
	header('Location: trainer_add.html');  
}
   else {
   	alert("something gone wrong kindly try after some time");
	//header('Location: trainer_add.html');

   }


	?>