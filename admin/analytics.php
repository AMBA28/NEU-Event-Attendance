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
}
</style>

<body>
<div id="wrapper">

    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand simple-text">
                <a href="#">
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
                <div class="col-lg-10">
                    <h1>Analytics</h1>
                </div>
                <div class="col-lg-2"><a href class="btn btn-primary" data-toggle="sidebar" style="float: right;">Toggle Sidebar</a></div>
            </div>
            
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method="post" enctype="multipart/form-data">
                        <div class="jumbotron" style="background-color: #3C4858; border: 1px solid #fff;">
                            <p class="lead">Import attendance to database</p>
                            <hr class="my-4" style="border-bottom: 1px solid #fff;">
                            <p>To upload a csv, Please select an event, choose a CSV file and click upload.</p>
                            <p class="lead">
                                <select class="form-control input-md" name="event-dropdown" required="required" style="width: 160px;">
                                    <option value="">Select Event</option>
                                    <?php 
                                        $get_events = "SELECT * FROM events ORDER BY 1 ASC";
                                        $run_event = mysqli_query($connection, $get_events);

                                        while($row_events = mysqli_fetch_array($run_event)) {
                                            $event_id = $row_events['event_id'];
                                            $event_title = $row_events['event_title'];

                                            echo "<option value='$event_id'>$event_id</option>";
                                        }
                                    ?>
                                </select>
                                <input type="file" name="csvFile" class="btn"/>
                                <input type="submit" name="upload" value="Upload" class="btn btn-info" style="float: right;">
                            </p>
                        </div>
                        <?php
                            if(isset($_POST['upload'])) {
                                $fileName = $_FILES['csvFile']['name'];
                                $fileTempName = $_FILES['csvFile']['tmp_name'];
                                
                                $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                                
                                $allowedType = array('csv');
                                if(!in_array($fileExtension, $allowedType)) {
                                    echo "
                                    <div class='alert alert-danger'>Invalid File Extension</div>
                                    ";
                                } else {
                                    $handle = fopen($fileTempName, 'r');
                                    $event_attended = $_POST['event-dropdown'];
                                    while(($data = fgetcsv($handle, 1000, ',')) !== false) {
                                        $timeStamp = str_replace( array( '\'', '"', ',' , ';', '<', '>' ), ' ', $data[1]);
                                        $student_id = $data[3];
                                        
                                        $insertQuery = "INSERT INTO event_attendees(timestamp, student_id, event_attended) VALUES('$timeStamp','$student_id','$event_attended')";
                                        
                                        $run = mysqli_query($connection, $insertQuery);
                                    }
                                    if(!$run) {
                                        die("Oops! There was an error in upload the file: " . mysql_error());
                                    } else {
                                        echo "
                                        <div class='alert alert-success'>File has been uploaded successfully.</div>
                                        ";
                                    }
                                }
                            }
                        ?>
                    </form>
                </div>
                <div class="col-sm-2"></div>
                
            </div>
            
            <div class="row">
                <div class="col-md-12" style="padding-top: 50px;"></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="row">
                        <p>Generate of attendees by in an event by department.</p>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-3">
                                <select class="form-control input-md" name="choose-event" required="required" style="width: 100%; height: 40px;">
                                    <option value="">Select Event</option>
                                    <?php 
                                        $get_events = "SELECT * FROM events ORDER BY 1 ASC";
                                        $run_event = mysqli_query($connection, $get_events);

                                        while($row_events = mysqli_fetch_array($run_event)) {
                                            $event_id = $row_events['event_id'];
                                            $event_title = $row_events['event_title'];

                                            echo "<option value='$event_id'>$event_title</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-sm-7">
                                <input type="submit" class="btn btn-outline-light" name="generate" value="Generate" style="float: left; width: 160px; height: 40px;" />
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                        </div>
                    </form>
                            
                    <?php
                        if(isset($_POST["generate"])){
                            $eventToShow = $_POST['choose-event'];
                            $count = "SELECT department, count(*) as number FROM registeredattendees WHERE registered_event_id='$eventToShow' GROUP BY department";  
                            $result = mysqli_query($connection, $count);

                        }
                    ?>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                    <script type="text/javascript">  
                    google.charts.load('current', {'packages':['corechart']});  
                    google.charts.setOnLoadCallback(drawChart);  
                    function drawChart() {  
                        var data = google.visualization.arrayToDataTable([  
                            ['Department', 'Number'],  
                                <?php  
                                    while($row = mysqli_fetch_array($result)) {  
                                       echo "['".$row["department"]."', ".$row["number"]."],";  
                                    }  
                                ?>  
                             ]);  
                        var options = {
                            backgroundColor: '#3C4858',
                            legend: {
                                textStyle: {
                                    color: '#fff'
                                }
                            }
                              //is3D:true,  
                              //pieHole: 0.4
                             };  
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                        chart.draw(data, options);  
                    }  
                    </script> 
                    <div style="width:900px;">  
                        <div id="piechart" style="width: 900px; height: 500px;"></div>  
                    </div> 
                    </div>
                <div class="col-sm-1"></div>
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