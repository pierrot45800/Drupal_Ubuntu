<?php

function OpenCon()
{
$dbhost = "localhost";
$dbuser = "lima";
$dbpass = "lima";
$db = "portal";
$db = new PDO('mysql:host=localhost;dbname=portal;charset=utf8', 'lima', 'lima');


return $conn;
}

function CloseCon($conn)
{
$conn->close();
}

?>
