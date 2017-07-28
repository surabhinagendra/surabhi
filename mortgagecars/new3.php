<?php
$servername = "handson-mysql";
$username = "guestinterns";
$password = "interns2017";
$dbname="intern2017_group2";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";

if (1)
{   echo "America";
	 $name  =  $_POST["Name"];
	 $age = $_POST["age"];
	 $pincode  = $_POST['Pincode'];
     $paymentmode = $_POST['paymentmode'];

	 $sql12 = "INSERT INTO clients (cid,name,age,pincode,paymentmode,description) VALUES ('1010','".$name."','".$age."' ,'".$pincode."','".$paymentmode."','sell')";

	echo $sql12;
	//$result=mysqli_query($conn,$sql);
	//echo $conn->query($sql);
	$result1=$conn->query($sql12);
	echo $result1;
 	
}
else {
	echo "in else";
}





$sql = "SELECT * from clients";
$result = $conn->query($sql);
echo "hello";
if ($result->num_rows > 0) {
    
    echo "namskara";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["cid"]. " - Name: " . $row["name"]. " age" . $row["age"]. "pincode". $row["pincode"]."payment type".$row["paymentmode"]. "<br>";
    }
}
?>