<!DOCTYPE html>

<?php
include("includes/navbar.php");
include("connection.php");
session_start();
?>
<html>
<head>
    <meta charset="UTF-8" />
    <link rel="neu-logo" sizes="76x76" href="images/New_Era_University.png">
    <link rel="icon" type="image/png" href="images/New_Era_University.png">
    <title>New Era University</title>
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
</head>
<style>
    body {
        overflow-x: hidden;
        font-family: 'Roboto', sans-serif;
    }     
    
    .carousel-caption {
        text-shadow: 2px 3px #000;
    }
    
    .card-text {
        white-space: nowrap;
        width: 600px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    
    .carousel-item {
      height: 100vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
</style>
<body>
    <div class="row">
        <div class="col-sm-12">
            <header>
                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselIndicators" data-slide-to="3"></li>
                    </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('images/NEU_Main2.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>NEU Quezon City (Main)</h3>
                            <p>No. 9 Central Avenue, New Era (Central Office Complex of the Iglesia ni Cristo), Quezon City, Manila, Philippines</p>
                        </div>
                    </div>

                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('images/NEU_Lipa.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>NEU Batangas</h3>
                            <p>1795 P. Olan St Lipa 4217, Batangas.</p>
                        </div>
                    </div>

                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('images/NEU_Pampanga.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>NEU Pampanga</h3>
                            <p>MacArthur Highway, City of San Fernando, Pampanga, Manila N Rd, San Fernando, Pampanga</p>
                        </div>
                    </div>
                    
                    <!-- Slide Four - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('images/NEU_Gensan.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>NEU General Santos City</h3>
                            <p>Purok Malakas, Aparente St, Lungsod ng General Santos, 9500</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </header>

            <!-- Page Content 
            <section class="py-5">
                <div class="container">
                    <h1>Full Slider by Start Bootstrap</h1>
                    <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the <code>full-slider.css</code> file.</p>
                </div>
            </section>-->
            
            <!-- Footer 
            <footer class="py-5 bg-dark">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
                </div> container -->
            </footer>
            
        </div>
    </div>
</body>
</html>