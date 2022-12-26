<?php
$Name = $_POST['Name'];
$RollNo = $_POST['RollNo'];
$Branch = $_POST['Branch'];
$Sem = $_POST['Sem'];
$phone = $_POST['phone'];

//database connection code
$conn = mysqli_connect('localhost','root','','reg');
if ($conn->connect_error){
 die('Connection Failed:'.$conn->connect_error);
} else {
    $stmt = mysqli_prepare($conn,"insert into registration values(?,?,?,?,?)");
 mysqli_stmt_bind_param($stmt,'sisii',$Name,$RollNo,$Branch,$Sem,$phone);
 mysqli_stmt_execute($stmt);
 echo "Registered Succesfully";
 $stmt->close();
 $conn->close();
}
?>