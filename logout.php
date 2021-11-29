<!DOCTYPE html>
<html>
    <head>
        <title>Netflix Nowledge</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color:#434343">
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="control.php" style="color:red"><strong>Netflix Nowledge</strong></a>
                    <a href="control.php" class="btn btn-danger" style="color:white">Login</a>
                </div>
            </nav>
        </header>
        <form class="row g-3" style="margin:0% 15% 0% 15%">
            <h1 style="text-align:center; margin:3% 0% 1% 0%;  color:white"><strong>Logged Out</strong></h1>
            <div class="box">
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<?php
session_start();

require "Util.php";
$util = new Util();

//Clear Session
$_SESSION["member_id"] = "";
session_destroy();

// clear cookies
$util->clearAuthCookie();

//header("Location: ./logout.php");
?>
