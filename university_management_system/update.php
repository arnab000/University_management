<?php
include 'connect.php';
$update_id= $_GET['updateid'];

if(isset($_POST['submit'])){
  $id=$_POST['roll'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $passcode=$_POST['passcode'];

  $sql="update Student 
  set Id=$id,Name='$name',Email='$email',Passcode='$passcode'
  where Id=$update_id";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:student_enroll.php');
  }else{
    die(mysqli_error($con));
  }

}

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title> world!</title>
</head>

<body>
  <div class="container my-5  ">
    <form method="post">
      <div class="form-group">
        <label>Unique ID</label>
        <input type="text" class="form-control" placeholder="Enter student's id" name="roll">
      </div>
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter student's name" name="name">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter student's email" name="email">
      </div>
      <div class="form-group">
        <label>Passcode</label>
        <input type="text" class="form-control" placeholder="Enter student's passcode" name="passcode">
      </div>

      <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
    </form>
  </div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  

</body>

</html>