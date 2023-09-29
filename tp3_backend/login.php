<?php
$user = $_POST ["usuario"];
$pass = $_POST ["pass"];

$ckuser = "admin";
$ckpass = 1234;

if ($user == $ckuser && $pass == $ckpass) {
 header ("location: https://google.com.ar");
}else {
  header ("location: https://www.lego.com/es-mx/notfound");
}
