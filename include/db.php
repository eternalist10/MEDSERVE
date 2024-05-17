<?php 
    $con = new mysqli('localhost','id22179538_root','Shubhra@04','Medserve');
//for user information making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://localhost/dev.test/Medical%20Booking%20Store/";
?>