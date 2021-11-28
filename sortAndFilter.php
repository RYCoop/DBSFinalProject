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
                    <button class="btn btn-danger" type="sort.filter">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        <form class="row g-3" style="margin:0% 15% 0% 15%">
            <h1 style="text-align:center; margin:3% 0% 1% 0%"><strong>SORT. FILTER</strong></h1>
            <div class="col-md-6">
                <label for="showID" class="form-label">Show ID</label>
                <input type="text" class="form-control" id="showID">
            </div>
            <div class="col-md-6">
                <label for="cast" class="form-label">Cast</label>
                <input type="text" class="form-control" id="cast">
            </div>
            <div class="col-md-6">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type">
            </div>
            <div class="col-md-6">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country">
            </div>
            <div class="col-md-6">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="col-md-6">
                <label for="dateAdded" class="form-label">Date Added</label>
                <input type="text" class="form-control" id="dateAdded">
            </div>
            <div class="col-md-6">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director">
            </div>
            <div class="col-md-6">
                <label for="releaseYear" class="form-label">Release Year</label>
                <input type="text" class="form-control" id="releaseYear">
            </div>
            <div class="col-md-6">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating">
            </div>
            <div class="col-md-6">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration">
            </div>
            <div class="col text-center">
                <button class="btn btn-danger align-center px-5 mt-3" type="sort.filter" >Sort & Filter</button>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    require_once('./library.php');
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
    // Check connection
    if (mysqli_connect_errno()) {
        echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
        return null;
        }
?>
