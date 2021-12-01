<?php
session_start();
$update_id = $_SESSION['url_get_id'];
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
        <div>
            <h6 style="text-align:center; margin:3% 0% 1% 0%">This item has been successfully updated.</h6>
            <div class="col text-center">
                <a href="searchData.html"><button class="btn btn-danger align-center px-5 mt-3" type="submit">Back to Search</button></a>
            </div>
        </div>
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

	
	$Name = $_POST['title'];
	$Length = $_POST['duration'];
	$Rate = $_POST['rating'];
	$Year = $_POST['releaseYear'];

if($Name != NULL) {
		$sql_update_name = "UPDATE tv_movies SET Name = '{$Name}' WHERE ID = {$update_id}";
		if (!mysqli_query($con,$sql_update_name)){
                die('Error: ' . mysqli_error($con));
            	}
	}
	elseif($Length != NULL) {
		$sql_update_length = "UPDATE tv_movies SET Length = '{$Length}' WHERE ID = {$update_id}";
		if (!mysqli_query($con,$sql_update_length)){
                die('Error: ' . mysqli_error($con));
            	}
	}
	elseif($Rate != NULL) {
		$sql_update_rating = "UPDATE tv_movies SET Rating = '{$Rate}' WHERE ID = {$update_id}";
		if (!mysqli_query($con,$sql_update_rating)){
                die('Error: ' . mysqli_error($con));
            	}
	}
	elseif($Year != NULL) {
		$sql_update_year = "UPDATE tv_movies SET Year_Released = '{$Year}' WHERE ID = {$update_id}";
		if (!mysqli_query($con,$sql_update_year)){
                die('Error: ' . mysqli_error($con));
            	}
	}

$sql = "SELECT * FROM netflix_nowledge WHERE ID = {$update_id}";
if (!mysqli_query($con,$sql)){
                die('Error: ' . mysqli_error($con));
}
$result = mysqli_query($con, $sql);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Updated Entry</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";

    echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		foreach($row as $cell) {
			echo '<td>' . $cell . '</td>';
		}
		echo "</tr>\n";		
	}
    echo "</table>";
	mysqli_free_result($result);

mysqli_close($con);
?>
