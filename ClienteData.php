<?php
	$name= $_POST['name'];
	$op= $_POST['op'];
	$email= $_POST['email'];

	echo  $name ;
	echo  $email ;
	echo $op;
	

	$servername = "localhost";
	$username = "moya";
	$password = " moya ";
	
	try {

	    $conn = new PDO("mysql:host=$servername;dbname=exam", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully <br/>"; 


		$sql = "INSERT INTO clients (name, email, site) VALUES (:name,:email,:site)";

		$q = $conn->prepare($sql);
		$q->execute(array(':name'=>$name,'email'=>$email,'site'=>$op));
    }
	catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
?>