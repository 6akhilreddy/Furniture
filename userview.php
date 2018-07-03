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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>

</head>
<body style="background-color: #64DDBB">  


<div class="header">
  <a href="index.php" class="logo">Furniture</a>

    <div class="header-right">
    <a href="index.php">Home</a>
  
    <a class="active" href="logout.php">Logout</a>
  
  </div>

</div>

    
<div class="container">
  <h2>All Transactions</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Furniture_Name</th>
        <th>Username</th>
        <th>Email</th>

        <th>Number</th>
        <th>Address</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>

<?php
          include("Admin/config.php");
          $a = $_SESSION['username'];

          $sql = "select * from trans where name='$a'";
          $result = mysqli_query($con,$sql);
          
          
            while($row = mysqli_fetch_assoc($result))
        {
            $Fname = $row['fname'];
            $Name = $row['name'];
            $Email = $row['email'];
            $Number = $row['number'];
            $Address = $row['address'];
            $Quantity = $row['quantity'];
            $total = $row['total'];
            echo "<tr>";
            echo "<td>".$Fname."</td>";
            echo "<td>".$Name."</td>";
            echo "<td>".$Email."</td>";
            echo "<td>".$Number."</td>";
            echo "<td>".$Address."</td>";
            echo "<td>".$Quantity."</td>";
            echo "<td>".$total."</td>";
            echo "<tr>";
          
        }                                 
                        ?>
          

    </tbody>
  </table>
</div>

</body>
</html>
