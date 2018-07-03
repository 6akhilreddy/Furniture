<?php
  include("config.php");

if(isset($_POST['but_upload'])){

 $aname = $con->real_escape_string($_POST['aname']);
 $pname = $con->real_escape_string($_POST['pname']);
 $cost = $con->real_escape_string($_POST['cost']);
 $size = $con->real_escape_string($_POST['size']);
 $color = $con->real_escape_string($_POST['color']);
 $desc = $con->real_escape_string($_POST['desc']);
 $cat = $con->real_escape_string($_POST['c1']);
 
 $name = $_FILES['file']['name'];
 $target_dir = "upload/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);


 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){

  // Convert to base64
  $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
  $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
  // Insert recode()ord
  $query = "insert into furniture(image,name,brand,cost,details,size,color,category) values('".$image."','".$aname."','".$pname."','".$cost."','".$desc."','".$size."','".$color."','".$cat."')";
  mysqli_query($con,$query);

  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
 }

}

echo "<h1>uploaded sucessfully</h1>";
echo"<center><h2><a href=index.php>Go back</a></h2></center>";






?>
