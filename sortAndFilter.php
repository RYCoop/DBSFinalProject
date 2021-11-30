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
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
    require_once('./library.php');
    $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

 // Check connection
    if (mysqli_connect_errno()) {
        echo("Can't connect to MySQL Server. Error code: " . mysqli_connect_error());
        return null;
    }

// sorting
$sort_group1 = $_POST['sort-group'];
$sort_group2 = $_POST['sort-group-two'];

if(isset($sort_group1) && $sort_group1 == 'ID') {
	$column = "ID";
	// echo "selected ID";
}
elseif(isset($sort_group1) && $sort_group1 = 'Title') {
	$column = "TV_Movie";
	// echo "selected TV_Movie";
}
else {
	$column = "Year_Released";
	// echo "selected Year_Released";
}

if(isset($sort_group2) && $sort_group2 == 'increasing') {
	$order = "ASC"; 	
	// echo "selected increasing";
}
else {
	$order = "DESC";
	// echo "selected decreasing";	
}

// filtering
$sort_group3 = $_POST['filter-group'];
$text = $_POST['specific'];

if (isset($sort_group3) && $sort_group3 == 'ID') {
	$where = "ID";
	// echo "selected ID";
	$text_int = intval($text);
	$sql_with_ID = "SELECT * FROM netflix_nowledge WHERE {$where} = {$text_int} ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_ID)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_ID);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} = {$text}</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
    echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
	
}
elseif (isset($sort_group3) && $sort_group3 == 'Title') {
	$where = "TV_Movie";
	// echo "selected ID";
	$sql_with_Title = "SELECT * FROM netflix_nowledge WHERE {$where} LIKE '%{$text}%' ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_Title)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_Title);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} containing '{$text}'</strong></h1>";
    echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}
elseif (isset($sort_group3) && $sort_group3 == 'Director') {
	$where = "Directors";
	$sql_with_Director = "SELECT * FROM netflix_nowledge WHERE {$where} LIKE '%{$text}%' ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_Director)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_Director);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} containing '{$text}'</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}
elseif (isset($sort_group3) && $sort_group3 == 'Rating') {
	$where = "Rating";
	$sql_with_Rating = "SELECT * FROM netflix_nowledge WHERE {$where} LIKE '%{$text}%' ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_Rating)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_Rating);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} containing '{$text}'</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}
elseif (isset($sort_group3) && $sort_group3 == 'Cast') {
	$where = "Actors";
	$sql_with_Cast = "SELECT * FROM netflix_nowledge WHERE {$where} LIKE '%{$text}%' ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_Cast)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_Cast);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} containing '{$text}'</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}
elseif (isset($sort_group3) && $sort_group3 == 'Location') {
	$where = "Location";
	$sql_with_Location = "SELECT * FROM netflix_nowledge WHERE {$where} LIKE '%{$text}%' ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_Location)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_Location);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} containing '{$text}'</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}
elseif (isset($sort_group3) && $sort_group3 == 'Release_Year') {
	$where = "Year_Released";
	$text_int = intval($text);
	$sql_with_Release_Year = "SELECT * FROM netflix_nowledge WHERE {$where} = {$text_int} ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_Release_Year)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_Release_Year);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} = {$text}</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}
elseif (isset($sort_group3) && $sort_group3 == 'Genre') {
	$where = "Genre";
	$sql_with_Genre = "SELECT * FROM netflix_nowledge WHERE {$where} LIKE '%{$text}%' ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_with_Genre)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_with_Genre);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Filtered By {$where} conting '{$text}'</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}
else {
	echo "no filter selected";

	$sql_sort = "SELECT * FROM netflix_nowledge ORDER BY {$column} {$order}";
	if (!mysqli_query($con,$sql_sort)){
                die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con, $sql_sort);
	$fields_num = mysqli_num_fields($result);
	
	echo "<h1 style='text-align:center; margin:3% 10% 1% 10%'><strong>Results: Sort By {$column} {$order}</strong></h1>";
	echo "<table border'1' class='table' style='background-color: white; width:90%; margin-right: auto; margin-left: auto; margin-top: 2%;'><tr style='background-color: #E50914; color:white'>";
	for($i=0; $i<$fields_num; $i++) {
		$field = mysqli_fetch_field($result);
		echo "<th>{$field->name}</th>";
	}	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach($row as $cell)
			echo "<td>$cell</td>";
		echo "</tr>\n";
	}
    echo "</table>";
	mysqli_free_result($result);
}


mysqli_close($con);
?>
    </body>
</html>
