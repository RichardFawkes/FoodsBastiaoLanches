<?php
$dbc = mysqli_connect('localhost', 'root', '26040604', 'shopping') or die('Error connecting to MySQL server.'); 
if(isset($_POST['submit_button']))
{
    mysqli_query($dbc, 'TRUNCATE TABLE `orders`');
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

?>