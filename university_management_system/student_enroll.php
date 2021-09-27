<?php
include 'connect.php';
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
    <div class="container my-5">
        <button class="btn btn-primary">
            <a href="index.php" class="text-light">
                Add student info
            </a>

        </button>
        <table class="table my-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Reg No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from Student";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['Id'];
                        $name = $row['Name'];
                        $email = $row['Email'];
                        echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>
            <button class="btn btn-primary">
                <a href="update.php?updateid='.$id.'" class="text-light">
                  update
                </a>
            </button>
            <button class="btn btn-danger">
                <a href="delete.php?deleteid='.$id.'" class="text-light">
                  delete
                </a>
            </button>
        </td>
            </tr>';
                    }
                }
                ?>
              

            </tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>




</html>