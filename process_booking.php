<?php
// Variable for input html -> post

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$location = $_POST['location'];
$members = $_POST['members'];
$days= $_POST['days'];
$date= date('y-m-d',strtotime($_POST['date']));
$message= $_POST['message'];

// checking terms and conditions
// $checkbox= $_POST['checkbox'];
// if(!$checkbox){
//    echo "<h2>Please check the terms and conditions</h2>";
// }
  


if(!$name){
    echo "<h2>Please fill your name</h2>";
 }
if(!$email){
    echo "<h2>Please fill your email</h2>";
 }
 if(!$phone){
    echo "<h2>Please fill your phone</h2>";
 }
 if(!$location){
    echo "<h2>Please fill your location</h2>";
 }
// connection
$conn = mysqli_connect("localhost","root","","users");
if(! $conn){
    die("Connection Failed due to".mysqli_connect_error());
}

// sqli query
$sql= "INSERT INTO bookings(name,email,phone,state,location, members,days,date,message) VALUES('{$name}','{$email}','{$phone}','{$state}','{$location}','{$members}','{$days}','{$date}','{$message}')";


$result= mysqli_query($conn,$sql);
header("Location:sucessBook.html");

?>