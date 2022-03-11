<?php
    require 'connect.php';
    
    $pdo = connect();    
    $queryRes = $pdo->query('SELECT * FROM posts;');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    </head>

<body class="bg-dark">
    <table class="table text-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">titolo</th>
                <th scope="col">utente</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($queryRes as $row) {
                    echo "
                        <tr scope='row'>
                            <td>{$row["id"]}</td>
                            <td>{$row["titolo"]}</td>
                            <td>{$row["user_id"]}</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>