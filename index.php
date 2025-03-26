<?php
// Get the server name
$server_name = gethostname(); 

// Get the server IP address
$server_ip = $_SERVER['SERVER_ADDR']; 

// Display the greeting
echo "Hello from $server_name ($server_ip)";
?>
