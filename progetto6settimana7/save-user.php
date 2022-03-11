<?php

    require 'connect.php';

    $pdo = connect();

    try {
        $pdo->query("
        INSERT INTO users (username, email) VALUES 
        ('{$_POST['username']}', '{$_POST['email']}');"
    );    

    } catch(Exception $e) {
        var_dump($e);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="bg-dark text-light">

<header>
    <div class="row shadow p-3 text-center">
        <div class="col-3">
            <a href="save-user-form.php" class="btn btn-danger">Login</a>
        </div>
        <div class="col-3">
            <a href="get-users.php" class="btn btn-danger">Utenti</a>
        </div>
        <div class="col-3">
            <a href="save-post-form.php" class="btn btn-danger">Scrivi!</a>
        </div>
        <div class="col-3">
            <a href="get-posts.php" class="btn btn-danger">I Post</a>
        </div>
    </div>
</header>

   <div class="p-3"> 
       <h2>Bravo, ti sei registrato, complimenti vivissimi</h2>
    </div>
</body>

</html>