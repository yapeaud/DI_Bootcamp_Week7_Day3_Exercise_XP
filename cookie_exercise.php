<?php  
	$submitted =  isset($_POST['username']) &&  isset($_POST['password']);
	if($submitted) {
		setcookie('username', $_POST['username']);
	}
?>
<!Doctype html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>User Authentication</title>
 </head>
 <body>
	<?php if ($submitted): ?>
	<p class="text-center mt-5">Hello <b><?php echo $_POST['username']; ?></b></p>
	<?php else: ?>
	<p class="text-center mt-5">Connect first</p>
	<?php endif; ?>
    <main class="container">
        <form method="post" action="">
            <div class="mb-3">
                Username
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                Password
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Retour</a>
        </form>
    </main>
 </body>
</html>