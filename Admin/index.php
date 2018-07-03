<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

<div class="header">
  <h1>Furniture</h1>
  <h4 align="right"><a href=logout.php style="text-decoration: none;color: white">Logout</a></h4>
</div>

<div class="row">

<div class="col-3 menu">
  <ul>
    <li><a href=home.html style="text-decoration:none;color:white;" target="iframe_a">Home</a></li>
    <li><a href=form.php style="text-decoration:none;color:white;" target="iframe_a">Upload Furniture</a></li>
    <li><a href=viewtrans.php style="text-decoration:none;color:white;" target="iframe_a">View Transactions</a></li>
    

  </ul>
</div>

<div class="col-9">
<iframe height="500px" width="100%" src="home.html" name="iframe_a" ></iframe>
</div>

</div>

</body>
</html>
