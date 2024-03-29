<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login utente</title>
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

    <h2 class="px-5 pt-1">Registrati! Cosa aspetti?</h2>

    <form action="save-user.php" method="POST" class="p-5">
        <div class="p-2">
            <label for="" class="form-label">User</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="p-2">
            <label for="" class="form-label">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="p-2">
            <button class="btn btn-danger">Registrati</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>