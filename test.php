<?php
session_start();

include "FlashMessage.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>FlachMessage</title>
</head>
<body>
<div class="container">
    <div class="row">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">HOME</a>

                </div>
            </nav>

    </div>
</div>
<form action="handler.php" method="POST">
<div class="container">
    <?php FlashMessage::display('danger');
          FlashMessage::display('success');
    ?>


    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="col-sm-10">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <input type="email" id="inputEmail"class="form-control" name="email">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password">
            <div style="padding:5px;">
            <input class="btn btn-primary" type="submit" value="Submit">
            </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
