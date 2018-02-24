<?php include 'sqlconnect.php';?>
<?php
 
// create a variable
$id    = $_POST['sid'];
$location   = $_POST['Location'];
$problem   = $_POST['problem'];
$address    = $_POST['address'];
$desc = $_POST['desc'];
$date = date('Y-m-d');
 
//Execute the query

$sql="INSERT into ruraleducation (StudentID,timedate,Problem,Location,Zone,Description) VALUES('" . $id . "','" . $date . "','" . $problem . "','" . $location . "','" . $address . "','" . $desc. "')";
if ($connect->query($sql) === TRUE) {
    echo "Feedback submitted successfully <br> <br>";
    echo "<a href='feedback.html'>Go Back</a>";
}
else{
echo "<p>Error <br> <br></p>";
	echo "<a href='feedback.html'>Go Back</a>";
}
?>