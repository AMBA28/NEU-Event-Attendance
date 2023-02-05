<!DOCTYPE html>
<?php
    include("../connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Registration</title>
    <meta charset="UTF-8" />
    <link rel="neu-logo" sizes="76x76" href="../images/New_Era_University.png">
    <link rel="icon" type="image/png" href="../images/New_Era_University.png">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/scrollbar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
</head>
<style>
    body {
        overflow-x: hidden;
    } 
</style>
<body>
    <center>
    
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required="required">
                </div>
                <div class="form-group col-sm-6">
                    <label for="last_name">Last Name:</label>
                    <input type="text"class="form-control" id="last_name" placeholder="Last Name" name="last_name" required="required">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="instructor_id">Instructor ID</label>
                    <input type="text" class="form-control" id="instructor_id" placeholder="Instructor ID" name="instructor_id" value="" required="required">
                </div>
                <div class="form-group col-sm-6">
                    <label for="cellphone_number">Phone Number</label>
                    <input type="text" class="form-control" id="cellphone_number" name="phone_number" placeholder="Phone Number" required="required">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="email_address">Email Address</label>
                    <input type="email" class="form-control" id="email_address" placeholder="Email Address" name="email_address" required="required">
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary" name="admin_sign_up">Submit</button>
            </div>
            
        </form>
    </center>
  

</body>
</html>