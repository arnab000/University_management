<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $id = $_POST['roll'];
    $main_result=true;
    if(!empty($_POST['subject'])){
        foreach($_POST['subject'] as $value){
            $sql="insert into Takes (Id,Course_id)
            values($id,$value)";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $main_result =$main_result and $result;
            } else {
                die(mysqli_error($con));
            }
        }

    }
    if($main_result)
    {
        header("location:admin.php");
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
            <?php
            $sql="select * from Course";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                while($row= mysqli_fetch_assoc($result))
                {
                    $couse_id=$row['id'];
                    $couse_name=$row['name'];
                    $course_credit=$row['credit'];
                    echo '<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="subject[]" value="'.$couse_id.'" >
                    <label class="form-check-label" >
                        '.$couse_id.' '.$couse_name.' 
                    </label>
                </div>';
                    
                }
            }
            ?>
           
            

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