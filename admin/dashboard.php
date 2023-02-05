<!DOCTYPE html>
<?php include("../connection.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="neu-logo" sizes="76x76" href="../images/neu_logo.svg">
    <link rel="icon" type="image/png" href="../images/New_Era_University.png">
    <title>New Era University | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/scrollbar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>


<style>
    body {
        background-color: #3C4858;
        color: #fff;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        overflow-x: hidden;
        padding-left: 0;
    }
#wrapper {
    
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-right: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    right: 250px;
    width: 0;
    height: 100%;
    margin-right: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
    
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    background: -webkit-linear-gradient(#eee, #fff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.sidebar-nav > .sidebar-brand a:hover {
    background: -webkit-gradient(linear, left bottom, left top, from(#30cfd0), to(#330867));
    background: -webkit-linear-gradient(bottom, #30cfd0 0%, #330867 100%);
    background: linear-gradient(to top, #30cfd0 0%, #330867 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

@media(min-width:768px) {
    #wrapper {
        padding-right: 250px;
    }

    #wrapper.toggled {
        padding-right: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
    
    .simple-text {
    }
    .simple-text:hover, #v-pills-dashboard-tab:hover, #v-pills-attendance-tab:hover, #v-pills-analytics-tab:hover, #v-pills-settings-tab:hover {
        background: -webkit-gradient(linear, left bottom, left top, from(#30cfd0), to(#330867));
        background: -webkit-linear-gradient(bottom, #30cfd0 0%, #330867 100%);
        background: linear-gradient(to top, #30cfd0 0%, #330867 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .modal-content {
        background-color: #61758F;
    }

    .btn-outline-light {
        font-size: 12px;
        float: right;
        width: 60px;
        height: 30px;
    }
}
</style>

<body>
<div id="wrapper">

    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand simple-text">
                <a href="../index.php">
                    New Era University
                </a>
            </li>
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li>
                <a href="analytics.php">Analytics</a>
            </li>
        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-lg-2">
                    <input type="submit" class="btn btn-primary btn-md" style="float: right; height: 40px;" data-toggle="modal" data-target="#add-event" value="Add an Event">
                    <form method="post" enctype="multipart/form-data">
                        <!-- Modal -->
                        <div class="modal fade" id="add-event" tabindex="-1" role="dialog" aria-labelledby="add-eventLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="add-eventLabel">Add an Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="add_event_title">Enter event title:</label>
                                                <input type="text" class="form-control" id="add_event_title" name="event_name" placeholder="Event Title">
                                            </div>
                                        </div>                                                

                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="add-event-description">Enter event description:</label>
                                                <textarea class="form-control" id="add-event-description"  name="event_description" placeholder="Event Description" style="height: 300px;"></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="add_event_venue">Enter event venue:</label>
                                                <input type="text" class="form-control" id="add_event_venue"  name="event_venue" placeholder="Event Venue">
                                            </div>
                                        </div>                                                 

                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="add-event-date">Event Date: </label>
                                                <input type="date" class="form-control" id="add-event-date" name="event_date">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <script src="js/jQuery.js">
                                                var _URL = window.URL || window.webkitURL;

                                                function displayPreview(files) {
                                                    var file = files[0];
                                                    var img = new Image();
                                                    var sizeKB = file.size / 9999;
                                                }

                                                img.src = _URL.createObjectURL(file);
                                                </script>
                                                <input type="file" id="event_picture" name="event_image" onchange="displayPreview(this.files);">
                                                <p onchange="displayPreview(this.files);"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-md btn-success" value="Done" name="add_event_button" dismiss="modal">
                                    </div>
                                    <?php
                                        if(isset($_POST['add_event_button'])) {
                                            $event_title = htmlentities(mysqli_real_escape_string($connection, $_POST['event_name']));
                                            $event_description = htmlentities(mysqli_real_escape_string($connection, $_POST['event_description']));
                                            $event_venue = htmlentities(mysqli_real_escape_string($connection, $_POST['event_venue']));
                                            $event_date = htmlentities(mysqli_real_escape_string($connection, $_POST['event_date']));

                                            $event_image = $_FILES['event_image']['name'];
                                            $image_tmp = $_FILES['event_image']['tmp_name'];
                                            $random_number = rand(1,100);

                                            move_uploaded_file($image_tmp, "../event_pictures/$event_image.$random_number");

                                            $insert = "INSERT INTO events (event_title, event_description, event_venue, event_date,  event_image, event_posted) VALUES('$event_title', '$event_description', '$event_venue', '$event_date', '$event_image.$random_number', NOW())";

                                            $query = mysqli_query($connection, $insert);

                                            if($query) {
                                                echo "<script>alert('Event $event_title has been added.')</script>";
                                            } else {
                                                echo "<script>alert('Uh oh! There seems to be a problem uploading the event.')</script>";
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2"><a href class="btn btn-primary" data-toggle="sidebar" style="float: right;">Toggle Sidebar</a></div>
            </div>
            
            <div class="row" style="padding-top: 20px;">
                <div class="col-md-12" style="padding-top: 50px;"></div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <h3>Events</h3>
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <td scope="col">Event ID</td>
                                    <td scope="col">Event Title</td>
                                    <td scope="col">Event Description</td>
                                    <td scope="col">Event Venue</td>
                                    <td scope="col">Event Date</td>
                                </tr>
                            </thead>
                            <tbody>
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
                                            <tr>
                                                <td>$event_id</td>
                                                <td>$event_title</td>
                                                <td>$event_description</td>
                                                <td>$event_venue</td>
                                                <td>$event_date</td>
                                            </tr>
                                        ";

                                    }


                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>

<script>
$('[data-toggle="sidebar"]').click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>