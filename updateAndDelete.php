<?php 
session_start();
$_SESSION['url_get_id'] = $_GET['id'];
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
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <form action = "delete.php" method = "GET" class="row g-3" style="margin:0% 15% 0% 15%">
                        <h1 style="text-align:center; margin:3% 0% 1% 0%"><strong>DELETE</strong></h1>
                        <p style="text-align:center;">To delete this item from the database, click the button below. This action is permanent and the item will no longer exist.</p>
                        <div class="col text-center">
                            <button class="btn btn-danger align-center px-5 mt-2" type="submit">Delete</button>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <form action = "update.php" method = "POST" class="row g-3" style="margin:0% 5% 0% 5%">
                        <h1 style="text-align:center; margin:3% 0% 1% 0%"><strong>UPDATE</strong></h1>
                        <div>
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div>
                            <label for="duration" class="form-label">Duration</label>
                            <input type="text" class="form-control" name="duration">
                        </div>
                        <div>
                            <label for="rating" class="form-label">Rating</label>
                            <input type="text" class="form-control" name="rating">
                        </div>
                        <div>
                            <label for="releaseYear" class="form-label">Release Year</label>
                            <input type="text" class="form-control" name="releaseYear">
                        </div>
                        <div>
                            <label for="director" class="form-label">Director</label>
                            <input type="text" class="form-control" name="director">
                        </div>
                        <div></div>
                        <div class="col text-center">
                            <button class="btn btn-danger align-center px-5 mt-2" type="submit" >Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
