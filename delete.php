<?php
session_start();
$delete_ID = $_SESSION['url_get_id'];
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Netflix Nowledge</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color:#434343; color:white">
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php" style="color:red"><strong>Netflix Nowledge</strong></a>
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <?php
            require_once('./library.php');
            $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

        // Check connection
            if (mysqli_connect_errno()) {
                echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
                return null;
            }

//tv_movies
	$sql_tv_movies = "DELETE FROM TV_Movies WHERE ID = {$delete_ID}";
	if (!mysqli_query($con,$sql_tv_movies)){
                die('Error: ' . mysqli_error($con));
            }
            echo "1 record deleted from tv_movies"; // Output to user


        mysqli_close($con);
        ?>
    </body>
</html>
