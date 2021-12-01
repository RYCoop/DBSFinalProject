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
                    <a class="navbar-brand" href="index.php" style="color:red"><strong>Netflix Nowledge</strong></a>
                    <a href="logout.php" class="btn btn-danger" style="color:white">Logout</a>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row justify-content-center" style="margin-top:18%;">
                <a href="add.html" class="btn btn-danger" style="width:20%; padding:5% 0% 5% 0%; margin: 0% 3% 0% 3%"><strong>Add</strong></a>
                <a href="searchData.html" class="btn btn-danger" style="width:20%; padding:5% 0% 5% 0%; margin: 0% 3% 0% 3%"><strong>Search, Delete, & Update</strong></a>
                <a href="sortAndFilter.html" class="btn btn-danger" style="width:20%; padding:5% 0% 5% 0%; margin: 0% 3% 0% 3%"><strong>Sort & Filter</strong></a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
    require_once('./library.php');
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
    // Check connection
    if (mysqli_connect_errno()) {
        echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
        return null;
        }
$sql = "SELECT total_movies FROM movie_counter";

if (!mysqli_query($con,$sql)){
                die('Error: ' . mysqli_error($con));
}

$result = mysqli_query($con, $sql);
    $fields_num = mysqli_fetch_array($result);
    
    echo "<h1 style='text-align:center; color:white; margin:-18% 10% 1% 10%'><strong>Total TV/Movies on record: {$fields_num{0}}</strong></h1>";
    
?>
    </body>
</html>

<?php
session_start();

require_once "authCookieSessionValidate.php";

if(!$isLoggedIn) {
    header("Location: ./");
}
?>
