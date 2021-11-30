<!DOCTYPE HTML>
<html lang="en">
<style>
            .box {
                height:10px;
                width:5px;
                background-color:grey;
                padding-top: 200px;
                padding-right: 200px;
                padding-bottom: 175px;
                padding-left: 200px;
                color:blue;
                border-width: 15px 15px 15px 15px;
                border-color: grey;
                border-style: solid;
                border-radius: 70%
                outline-color: grey;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-right: 10px;
                margin-left: 10px;
            }
        </style>
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
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
    require_once('./library.php');
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
    // Check connection
    if (mysqli_connect_errno()) {
        echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
        return null;
        }

        $Name = $_POST['title'];
        if(empty($Name)) {
            $Name = NULL;
        }
        
$sql = "SELECT * FROM netflix_nowledge WHERE TV_Movie LIKE '%{$Name}%'";

if (!mysqli_query($con,$sql)){
                die('Error: ' . mysqli_error($con));
}

$result = mysqli_query($con, $sql);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Searched for '{$Name}'</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";

    echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
	//echo '<td><a href="delete.html"><input type="radio" name="update" </a></td>';
	//echo "<td><a href='update.html?id=$row[0]'>$row[0]</a></td>";
	//echo "$row[1]";
		foreach($row as $cell) {
			if($cell == $row[0]) {
				echo "<td><a href='update.html?id=$cell'>$cell</a></td>";
			}
			else {
				echo '<td>' . $cell . '</td>';
			}
			//echo '<td><a href="update.html"><input type="button" name="update_button" value="' . $cell . '"></a></td>';
		}
		echo "</tr>\n";		
	}
    echo "</table>";
	mysqli_free_result($result);

mysqli_close($con);

?>

    </body>
</html>


