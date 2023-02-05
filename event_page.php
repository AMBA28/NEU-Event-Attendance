<!DOCTYPE html>
<?php 
    include("includes/navbar.php");
    include("connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="neu-logo" sizes="76x76" href="images/New_Era_University.png">
    <link rel="icon" type="image/png" href="images/New_Era_University.png">
    <title>New Era University | Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/scrollbar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/scrollbar.css" type="text/css">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
</head>
<style>
    body {
        overflow-x: hidden;
    }    
    
    .event-collection {
        padding-top: 50px;
    }
    
    .header {
        padding-top: 100px;   
    }
    h1 {
        font-family: 'Titan One', cursive;
    }
</style>
<body>
    <div class="row event-collection header">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <h1>Events</h1>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <div class="row event-collection">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <?php 
                global $connection;
                $get_events = "SELECT * FROM events ORDER BY 1 DESC";
                $run_events = mysqli_query($connection, $get_events);

                while($row_events = mysqli_fetch_array($run_events)) {
                    $event_id = $row_events['event_id'];
                    $event_title = $row_events['event_title'];
                    $event_description = $row_events['event_description'];
                    $event_venue = $row_events['event_venue'];
                    $event_image = $row_events['event_image'];
                    $event_date = $row_events['event_date'];
                    $event_posted = $row_events['event_posted'];
                    
                    echo "
                        <div class='card mb-3'>
                            <a href='single_event_page.php?event_title=$event_title&event_posted=$event_posted&event_description=$event_description&event_image=$event_image&event_id=$event_id&event_venue=$event_venue&event_date=$event_date'><img class='card-img-top' src='event_pictures/$event_image' alt='Card image cap'></a>
                            <div class='card-body'>
                                <a href='single_event_page.php?event_title=$event_title&event_posted=$event_posted&event_description=$event_description&event_image=$event_image&event_id=$event_id&event_venue=$event_venue&event_date=$event_date'><h5 class='card-title'>$event_title</h5></a>
                                <p class='card-text'>$event_description</p>
                                <p>on $event_date</p>
                            </div>
                            <div class='card-footer'>
                                <p class='card-text'><small class='text-muted'>Posted on $event_posted</small></p>
                            </div>
                        </div>

                    ";

                }
            ?>
            
        </div>
        <div class="col-sm-2"></div>
    </div>
<?php include("includes/footer.php")?>
</body>
</html>