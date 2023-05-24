
<?php
if(isset($_POST['submit'])){
    $server = 'localhost';
    $password = '';
    $username = 'root';
    $database = 'form';
    
    
    
    $conn = mysqli_connect($server,$username,$password,$database);
    
    
    if(!$conn){
        echo die("your connection is faied ");
    }
    
    
    else{
        echo "connected";
    }
    
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$job = $_POST['job'];


$sql = "INSERT INTO form.form1(name,email,phone,job) VALUES ('$name','$email','$phone','$job')";


if($conn->query($sql) == true){
    $insert = true;
}
else{
    echo "error $sql <br> $con->error";
}

$conn->close();

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">name</label>
    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">email</label>
    <input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">phone</label>
    <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">job</label>
    <input type="text" name="job" class="form-control" id="formGroupExampleInput" placeholder="job">
  </div>
  <button type="submit" name="submit" class="btn btn-success">submit</button>

</form>
</body>
</html>

