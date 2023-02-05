<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate QR Code</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style>
        body, html {
            height: 100%;
            width: 100%;
        }
        
        .bg {
            background-image: url(images/NEU_Main2.jpg);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    
</head>
<body class="br">
    <div class="container" id="panel">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="background-color: white; padding: 20px; box-shadow: 10px 10px 5px #000;">
                <div class="panel-heading">
                    <h1>Generate QR-Code in PHP</h1>
                </div>
                <hr>
                <form action="show.php" method="get">
                    <input type="text" class="form-control" name="text" style="border-radius:0px;" placeholder="Text..." value="">
                    <br>
                    <input type="submit" class="btn btn-md btn-danger btn-block" value="Generate" name="generate"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>