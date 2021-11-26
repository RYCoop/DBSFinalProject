<!DOCTYPE HTML>
<html lang="en">
<style>
            .box {
                height:5px;
                width:5px;
                background-color:grey;
                padding-top: 60px;
                padding-right: 60px;
                padding-bottom: 60px;
                padding-left: 60px;
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
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger" type="sort.filter">Search</button>
                    </form>
                </div>
            </nav>
        </header>
        <form class="row g-3" style="margin:0% 15% 0% 15%">
            <h1 style="text-align:center; margin:3% 0% 1% 0%"><strong>SELECTED MOVIE</strong></h1>
            <div class="box">
            </div>
            <div class="col text-center">
                <button class="btn btn-danger align-center px-5 mt-3" type="sort.filter" >DELETE</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-danger align-center px-5 mt-3" type="sort.filter" >UPDATE</button>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
