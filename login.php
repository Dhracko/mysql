<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // if($username && $password) {
    //     echo $username;
    //     echo "<br>";
    //     echo $password;
    // } else {
    //     echo "Please input Username and Password";
    // }

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if($connection) {
        echo "We are connected";
    } else {
        die("Database connection failed");
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
<div class="container-md">
    <!-- <div class="row"> -->
        <div class="col-sm-6">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>

        </div>
    <!-- </div> -->
</div>
    
</body>
</html>