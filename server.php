<?php

include('upload.php');
include('class.php');


if(isset($_POST['submit']))
{
	$nObject=new Poster();
	if($nObject->name_event_error_1==0||$nObject->name_event_error_2==0)
		echo "Enter valid name";
	if($nObject->prize_error==0)
		echo "Prime money should be greater than 1 lakh";
	if($nObject->contact_phone_error==0)
		echo "enter valid phone number";
	$n1s="";
	$n2s="";
	$n3s="";
	$n4s="";
	$n5s="";

	if(isset ($_FILES['file1']['name']))
	{
		$n1=new upload;
		$n1s=$n1->uploadfile("file1");
	}
	if(isset ($_FILES['file1']['name']))
	{
		$n2=new upload;
		$n2s=$n2->uploadfile("file2");
	}
	if(isset ($_FILES['file3']['name']))
	{
		$n3=new upload;
		$n3s=$n3->uploadfile("file3");
	}
	if(isset ($_FILES['file4']['name']))
	{
		$n4=new upload;
		$n4s=$n4->uploadfile("file4");
	}
	if(isset ($_FILES['file5']['name']))
	{
		$n5=new upload;
		$n5s=$n5->uploadfile("file5");
	}

	if($nObject->name_event_error_1&&$nObject->name_event_error_2)
	{

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mydb";
				
		  
		         $con  = new mysqli($servername,$username,$password,$dbname);

		         $prizes=$nObject->prize_1+$nObject->prize_2+$nObject->prize_3;
//echo $nObject->name_event;
$sql = "INSERT INTO table1 values ('$nObject->name_event','$nObject->organised_by','$nObject->venue','$nObject->date','$nObject->prize_1','$nObject->prize_2','$nObject->prize_3','$nObject->instruction','$nObject->contact_phone','$nObject->email','$n1s','$n2s','$n3s','$n4s','$n5s')";
				 
				 $result = $con->query($sql);

				 $hidemydiv = "hide";

	echo "<div>  <h1><center> '$nObject->name_event' </center></h1></div>";
	echo "<h4>Organised by $nObject->organised_by</h4>";
	echo "<br><br>Prizes worth $prizes $";

	echo"<br><br> $nObject->instruction";


	

	echo "<br><img src=$n1s height='150' width='150'><img src=$n2s height='150' width='150'><img src=$n3s height='150' width='150'><img src=$n4s height='150' width='150'><img src=$n5s height='150' width='150' >";
	echo"<br><br><br>For more information: <br>Call:$nObject->contact_phone <br> email:$nObject->email";

	echo"<br><button onclick='func()'>print</button> <script> function func(){ window.print()  }</script>";

}



}


?>