<!DOCTYPE html>
<html lang="en">
<head>
  <title>Furniture</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f1c40f ;">

<div class="container">
  <h2>Upload Furniture</h2><br/><br/>
  <form action="upload.php" method="post" enctype='multipart/form-data'>
    <div class="form-group">
      <label for="name">Furniture Name:</label>
      <input type="text " class="form-control" id="aname" placeholder="Enter Furniture Name" name="aname">
    </div>
    <div class="form-group">
      <label for="pname">Furniture Brand:</label>
      <input type="text" class="form-control" id="pname" placeholder="Enter Furniture Brand" name="pname">
    </div>

    <div class="form-group">
      <label for="cost">Furniture Cost:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter Furniture Cost" name="cost">
    </div>
    <div class="form-group">
      <label for="cost">Furniture Size:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter Furniture Size" name="size">
    </div>
    <div class="form-group">
      <label for="cost">Furniture Color:</label>
      <input type="text" class="form-control" id="cost" placeholder="Enter Furniture Color" name="color">
    </div>

    <div class="form-group">
      <label for="cost">Furniture Details:</label>
      <Textarea class="form-control" id="cost" placeholder="Enter Furniture Details" name="desc"></Textarea>
    </div>
    <div class="form-group">
      <label for="cost">Furniture Category:</label>
      <input type="radio" class="radio-inline" id="cost" name="c1" value="sofa">
      1.Sofa Set
      <input type="radio" class="radio-inline" id="cost" name="c1" value="cot">
      2.Cots
      <input type="radio" class="radio-inline" id="cost" name="c1" value="table">
      3.Tables
      <input type="radio" class="radio-inline" id="cost" name="c1" value="chair">
      4.Chairs
    </div>

    
    
    <div class="form-group">
      <label for="pwd">Upload Furniture</label>
      <input type='file' name='file' />
    </div>

    <button type="submit" class="btn btn-default" name='but_upload'>Submit</button>
  </form>
</div>

</body>
</html>
