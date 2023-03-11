<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'oksie');
    $postimg = $_POST['post_img'];
    $postprice = $_POST['post_price'];
    $posttext = $_POST['post_text'];


	$query_text = "INSERT INTO products (img,price,info) VALUES ('{$_POST['post_img']}', '{$_POST['post_price']}', '{$_POST['post_text']}')";
	$query = mysqli_query($conn, $query_text);

	header("Location: more.php");	
?>