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

        $ID = $_POST['showID'];
        $Actor = $_POST['cast'];
        if(empty($Actor)) {
            $Actor = NULL;
        }
        $Name = $_POST['title'];
        if(empty($Name)) {
            $Name = NULL;
        }
        $Location = $_POST['country'];
        if(empty($Location)) {
            $Location = NULL;
        }
        $Director = $_POST['director'];
        if(empty($Director)) {
            $Director = NULL;
        }
        $Year = $_POST['releaseYear'];
        if(empty($Year)) {
            $Year = NULL;
        }
        $Rating = $_POST['rating'];
        if(empty($Rating)) {
            $Rating = NULL;
        }
        $Length = $_POST['duration'];
        if(empty($Length)) {
            $Length = NULL;
        }
        $Genre = $_POST['genre'];
        if(empty($Genre)) {
            $Genre = NULL;
        }

        

            $sql_tv_movies = "INSERT INTO TV_Movies (ID, Name, Year_Released, Location, Length, Rating)
            VALUES($ID, '$Name', $Year, '$Location', '$Length', '$Rating')";

            if (!mysqli_query($con,$sql_tv_movies)){
                die('Error: ' . mysqli_error($con));
            }
            echo "1 record added into tv_movies"; // Output to user


        if ($Location == NULL) {
            echo "empty location field";
            $C_ID = 208;

            $sql_produced_in1 = "INSERT INTO produced_in(ID, Country_ID) 
            VALUES($ID, $C_ID)";
            if (!mysqli_query($con,$sql_produced_in1)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into produced_in"; // Output to user
        }
        elseif (mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(Country_ID) FROM Countries WHERE Name LIKE '%{$Location}%'"))[0] > 0)  {
            echo "location already exists";
            $result = mysqli_query($con, "SELECT Country_ID FROM Countries WHERE Name LIKE '%{$Location}%'");
            $row = mysqli_fetch_array($result);
            $C_ID = $row[0];
            
            $sql_produced_in2 = "INSERT INTO produced_in(ID, Country_ID) 
            VALUES($ID, $C_ID)";
            if (!mysqli_query($con,$sql_produced_in2)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into produced_in"; // Output to user
        }
        else {
            echo "location does not exist, add new one";
            $result = mysqli_query($con, "SELECT MAX(Country_ID) FROM Countries");
            $row = mysqli_fetch_array($result);
            $max_C_ID = $row[0];
            $C_ID = $max_C_ID + 1;
            $sql_countries = "INSERT INTO Countries (Country_ID, Name)
            VALUES($C_ID, '$Location')";
            if (!mysqli_query($con,$sql_countries)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into countries"; // Output to user

            $sql_produced_in3 = "INSERT INTO produced_in(ID, Country_ID) 
            VALUES($ID, $C_ID)";
            if (!mysqli_query($con,$sql_produced_in3)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into produced_in"; // Output to user
        }

        if ($Director == NULL) {
            echo "empty director field";
            $D_ID = 301;
            
            $sql_directs1 = "INSERT INTO directs(ID, Director_ID) 
            VALUES($ID, $D_ID)";
            if (!mysqli_query($con,$sql_directs1)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into directs"; // Output to user
            
        }
        elseif (mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(Director_ID) FROM Directors WHERE Name LIKE '%{$Director}%'"))[0] > 0)  {
            echo "director already exists";
            $result = mysqli_query($con, "SELECT Director_ID FROM Directors WHERE Name LIKE '%{$Director}%'");
            $row = mysqli_fetch_array($result);
            $D_ID = $row[0];
            
            $sql_directs2 = "INSERT INTO directs(ID, Director_ID) 
            VALUES($ID, $D_ID)";
            if (!mysqli_query($con,$sql_directs2)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into directs"; // Output to user

        }
        else {
            echo "director does not exist, add a new one";
            $result = mysqli_query($con, "SELECT MAX(Director_ID) FROM Directors");
            $row = mysqli_fetch_array($result);
            $max_D_ID = $row[0];
            $D_ID = $max_D_ID + 1;
            $sql_directors = "INSERT INTO Directors (Director_ID, Name)
            VALUES ($D_ID, '$Director')";
            if (!mysqli_query($con,$sql_directors)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into directors"; // Output to user

            $sql_directs3 = "INSERT INTO Directs(ID, Director_ID) 
            VALUES($ID, $D_ID)";
            if (!mysqli_query($con,$sql_directs3)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into directs"; // Output to user
        }

        if ($Actor == NULL) {
            $A_ID = 600;
            
            $sql_stars_in1 = "INSERT INTO Stars_in(ID, Actor_ID)
            VALUES($ID, $A_ID)";
            if (!mysqli_query($con,$sql_stars_in1)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into stars_in"; // Output to user
            
        }
        elseif (mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(Actor_ID) FROM Actors WHERE Name LIKE '%{$Actor}%'"))[0] > 0)  {
            $result = mysqli_query($con, "SELECT Actor_ID FROM Actors WHERE Name LIKE '%{$Actor}%'");
            $row = mysqli_fetch_array($result);
            $A_ID = $row[0];
            
            $sql_stars_in2 = "INSERT INTO stars_in(ID, Actor_ID) 
            VALUES($ID, $A_ID)";
            if (!mysqli_query($con,$sql_stars_in2)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into stars_in"; // Output to user
        }
        else {
            $result = mysqli_query($con, "SELECT MAX(Actor_ID) FROM Actors");
            $row = mysqli_fetch_array($result);
            $max_A_ID = $row[0];
            $A_ID = $max_A_ID + 1;
            $sql_actors = "INSERT INTO Actors (Actor_ID, Name)
            VALUES ($A_ID, '$Actor')";
            if (!mysqli_query($con,$sql_actors)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into actors"; // Output to user

            $sql_stars_in3 = "INSERT INTO Stars_in(ID, Actor_ID)
            VALUES($ID, $A_ID)";
            if (!mysqli_query($con,$sql_stars_in3)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into stars_in"; // Output to user
            
            // need to add in act_in(genre_id, actor_id)
        }
            
        $sql_worked_for = "INSERT INTO worked_for(Director_ID, Actor_ID) 
        VALUES ($D_ID, $A_ID)";
        if (!mysqli_query($con,$sql_worked_for)) {
                die('Error: ' . mysqli_error($con));
        }
        echo "1 record added into worked_for"; // Output to user

        if ($Genre == NULL) {
            $G_ID = 419;

            $sql_categorized_as1 = "INSERT INTO Categorized_as(ID, Genre_ID)
            VALUES($ID, $G_ID)";
            if (!mysqli_query($con,$sql_categorized_as1)){
                    die('Error: ' . mysqli_error($con));
                }
            echo "1 record added into categorized_as"; // Output to user
        }
        elseif (mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(Genre_ID) FROM Genre WHERE Name LIKE '{$Genre}'"))[0] > 0)  {
            $result = mysqli_query($con, "SELECT Genre_ID FROM Genre WHERE Name LIKE '{$Genre}'");
            $row = mysqli_fetch_array($result);
            $G_ID = $row[0];
            
            $sql_categorized_as2 = "INSERT INTO categorized_as(ID, Genre_ID) 
            VALUES($ID, $G_ID)";
            if (!mysqli_query($con,$sql_categorized_as)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into categorized_as"; // Output to user
        }
        else {
            $result = mysqli_query($con, "SELECT MAX(Genre_ID) FROM Genre");
            $row = mysqli_fetch_array($result);
            $max_G_ID = $row[0];
            $G_ID = $max_G_ID + 1;
            $sql_genre = "INSERT INTO Genre (Genre_ID, Name)
            VALUES ($ID, '$Genre')";
            if (!mysqli_query($con,$sql_genre)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into genre"; // Output to user

            $sql_categorized_as3 = "INSERT INTO Categorized_as(ID, Genre_ID)
            VALUES($ID, $G_ID)";
            if (!mysqli_query($con,$sql_categorized_as3)){
                    die('Error: ' . mysqli_error($con));
                }
                echo "1 record added into categorized_as"; 
            } // Output to user

        $sql_act_in = "INSERT INTO act_in(Genre_ID, Actor_ID) 
        VALUES ($G_ID, $A_ID)";
        if (!mysqli_query($con,$sql_act_in)) {
                die('Error: ' . mysqli_error($con));
        }
        echo "1 record added into act_in"; // Output to user


        mysqli_close($con);
        ?>
    </body>
</html>