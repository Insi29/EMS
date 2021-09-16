<?php 
session_start();
header('location:Index.php');
$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}else{
    echo "no connection";
}
mysqli_select_db($con, 'ems');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$q= "select * from price where name = '$name' && email = '$email' && message = '$message' ";

$result= mysqli_query($con,$q); 
$num= mysqli_num_rows($result);

if($num == 1){
    echo "duplicate data";
}else{
    $qy= " insert into price(name , email , message) values ('$name' , '$email' , '$message' ) " ;
    mysqli_query($con,$qy);
}

?>