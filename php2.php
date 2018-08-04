<?php


$servername = "localhost";
		 $username = "root";
		 $password = "";
		 $dbname = "mydb";
		 $con = new mysqli($servername,$username,$password,$dbname);
		 
		 if($con->connect_error)
		 {
			 die("Connection Failed!");
		 }
		 
		 $sql = "SELECT * FROM table1";
		 
		 $result = $con->query($sql);


		 while($row = $result->fetch_assoc())
			{	echo "".$row['name']."    ".$row['organised']."<br>";
		}


?>