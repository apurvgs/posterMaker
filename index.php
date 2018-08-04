
<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Poster Maker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.error {color: #FF0000}
  </style>>
</head>
<body>
<div class='<?php echo $hidemydiv ?>' >
<div class="container">
  <h2>Enter the details below to continue:</h2><br><br>
  <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name of Event:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name of event" name="name">
    </div>
    <div class="form-group">
      <label for="organised">Organised by:</label>
      <input type="text" class="form-control" id="organised" placeholder="Enter organisation" name="organised">
    </div>

    <div class="form-group">
      <label for="venue">Venue:</label>
      <input type="text" class="form-control" id="venue" placeholder="Enter venue" name="venue">
    </div>

    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>

    <div class="form-group">
      <label for="prize1">1st prize:</label>
      <input type="number" class="form-control" id="prize1" placeholder="Enter in rupees" name="prize1">
    </div>
    <div class="form-group">
      <label for="prize2">2nd prize:</label>
      <input type="number" class="form-control" id="prize2" placeholder="Enter in rupees" name="prize2">
    </div>
    <div class="form-group">
      <label for="prize3">3rd prize:</label>
      <input type="number" class="form-control" id="prize3" placeholder="Enter in rupees" name="prize3">
    </div>

    <div class="form-group">
      <label for="instruction">Instruction:</label>
      <input type="text" class="form-control" id="instruction" placeholder="" name="instruction">
    </div>
    <div class="form-group">
      <label for="contact">Contact us:</label>
      <input type="text" class="form-control" id="contact" placeholder="" name="contact">
    </div>
    <div class="form-group">
      <label for="contact">Email id:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
    </div>
    
    <div class="form-group">
      <label for="file1">Upload image:</label>
      <input type="file" class="form-control" id="file1" placeholder="" name="file1">
    </div>
    <div class="form-group">
      <label for="file2">Upload image:</label>
      <input type="file" class="form-control" id="file2" placeholder="" name="file2">
    </div>
    <div class="form-group">
      <label for="file3">Upload image:</label>
      <input type="file" class="form-control" id="file3" placeholder="" name="file3">
    </div>
    <div class="form-group">
      <label for="file4">Upload image:</label>
      <input type="file" class="form-control" id="file4" placeholder="" name="file4">
    </div>
    <div class="form-group">
      <label for="file5">Upload image:</label>
      <input type="file" class="form-control" id="file5" placeholder="" name="file5">
    </div>

    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

<br>
<form action="php2.php" method="post">
<input type="submit" value="show all">
</form>



</div>
</body>
</html>