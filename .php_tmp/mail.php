<?php

$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$brojtelefona = $_POST['brojtelefona'];
$poruka = $_POST['poruka'];

$mailheader = "From: ".$firstname."<".$email.">\r\n";

$recipient = "zujovic.marko@gmail.com";

mail($recipient, $firstname, $lastname, $brojtelefona, $poruka)
or die ("Error");

echo "Message sent";


?>