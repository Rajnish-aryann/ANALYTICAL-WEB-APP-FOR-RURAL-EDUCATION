<?php include 'sqlconnect.php';?>
<?php
 
// create a variable
$name    = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$subj    = $_POST['subject'];
$education = $_POST['education'];
$location = $_POST['location'];
$time = $_POST['time'];
 
//Execute the query

$sql="INSERT into teachers (Name,email,phone,subject,education,location,hours) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $subj . "','" . $education . "','" . $location . "','" . $time . "')";
if ($connect->query($sql) === TRUE) {
    echo "Registration successful <br> <br>";
    echo "<a href='teachreg.html'>Go Back</a>";
}
else{
echo "<p>Registration unsuccessful <br> <br></p>";
	echo "<a href='teachreg.html'>Go Back</a>";
}
?>