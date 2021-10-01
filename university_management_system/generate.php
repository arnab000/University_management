
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
<?php
include "connect.php";
if(isset($_GET['generateid']))
{
    $id= $_GET['generateid'];
    $sql= "select Student.Id,Student.Name,sum(Course.credit) as credit
    from Student natural join Takes,Course
    where Course.id=Takes.Course_id and Student.Id=$id";
    $result= mysqli_query($con,$sql);
    if($result)
    {
        $row= mysqli_fetch_assoc($result);
        echo '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading"> Roll : '.$row['Id'].' </h4>
        <p>Name: '.$row['Name'].'</p>
        <hr>
        <p class="mb-0">Amount of Credit taken: '.$row['credit'].'</p>
      </div>';
        
    }else
    {
        die(mysqli_error($con));
    }

}

?> 
<div>


<img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" class="rounded mx-auto d-block" >
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>




</html>