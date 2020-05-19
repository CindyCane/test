<?php
    include "config.php";
    $date = date("Y-m-d H:i:s");
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
    $postal=$_POST['postal'];
    $unit_size=$_POST['unit_size'];
    $hear_about=$_POST['hear_about'];
    $price=$_POST['price'];
    $is_broker=$_POST['is_broker'];

    $data = array($first_name, $last_name, $email, $phone, $city, $postal, $unit_size, $hear_about, $price, $is_broker);
    $data = array_map('trim', $data);
    $data = array_map('stripslashes', $data);
    $data = array_map('htmlspecialchars', $data);

    
    $sql= "INSERT INTO contact (date, first_name, last_name, email, phone, city, postal, unit_size, hear_about, price, is_broker) VALUES ('$date', '$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]','$data[5]','$data[6]','$data[7]','$data[8]', '$data[9]')";
    if ($con->query($sql)) {
        echo "success";
    }  else {
        echo "Oops... something went wrong. Try again later.";
    }
?>