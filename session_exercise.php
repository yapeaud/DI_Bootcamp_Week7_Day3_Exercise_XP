<?php
// Start the session
    session_start();

// Set session variables
    $_SESSION["username"] = 'Yapeaud';

// Check if the form is submitted
    if(isset($_POST['submit'])){

        //Retrieve data from a form
            $username = $_POST['username'];
            
            if($username == $_SESSION["username"] ){
                echo 'Welcome ' . $username;
            }
            else{
                echo 'The name is not correct';
            }
        // Finally, the session is destroyed.
         if(isset($_POST['logout'])){
            session_destroy();
         }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Exercise 1 : Username Session</title>
</head>
<body>
    <main class="container">
        <form action="" method="post" class="text-center mt-5">
            <div class="mb-3 form-check">
                <input type="text" name="username" class="form-control" >
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button name="logout" class="btn btn-danger">logout</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php">Retour</a>
        </form>
    </main>
</body>
</html>