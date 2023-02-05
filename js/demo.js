<!DOCTYPE html>
<?php 
	//include("connection.php");
?>



<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="neu-logo" sizes="76x76" href="images/New_Era_University.png">
    <link rel="icon" type="image/png" href="images/New_Era_University.png">
	<script src="js/demo.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="images/neu_logo.svg" alt="NEU Logo" class="mr-2" height="30">
    <a class="navbar-brand" href="index.php">New Era University</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-6" aria-controls="navbarNavDropdown-6"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse mr-auto" id="navbarNavDropdown-6">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="event_page.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Campuses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/index.php">Admin</a>
            </li>
            <!--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-6">
                    <a class="dropdown-item" href="#">Design</a>
                    <a class="dropdown-item" href="#">Development</a>
                    <a class="dropdown-item" href="#">Marketing</a>
                </div>
            </li>
            -->
        </ul>
    </div>
    <form class="form-inline">
        
        <input class="form-control mr-sm-2" name="q" type="text" placeholder="Search . . ." aria-label="Search" id="search_text_input">
        <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>-->
    </form>
</nav>
</body>
</html>
   

