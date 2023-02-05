<!DOCTYPE html>
<?php
    include("../connection.php");
?>
<html lang="en">
<head>
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
    
    #neuLogo {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        padding-bottom: 20px;
        width: 150px; 
        height: 150px;
        justify-content: center;
    }
    
    #loginBTN {
        flex: 1 1 auto;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        text-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        width: 100%;
        height: 50px;
    }
    
    #loginBTN {
        background-image: linear-gradient(to right, #330867 0%, #30cfd0 51%, #330867 100%);
    }
    #loginBTN:hover {
        background-position: right center; /* change the direction of the change here */
    }
</style>

<body>
    <div class="row">
        <div class="col-sm-4"></div>
        
        <div class="col-sm-4" style="padding-top: 100px;">
            <img src="../images/neu_logo.svg"id="neuLogo">
            <div class="card text-left">
               <form style="padding-left: 20px; padding-right: 20px;">
                    <div class="form-group" style="margin-top: 20px; text-align: center;">
                        <h2>Welcome, Admin!</h2>
                        <small>Please insert your email and password to proceed.</small>
                    </div>
                    <div class="form-group row" style="padding-top: 40px;">
                        <label for="email" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">     
                        </div>   
                    </div>
                    
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Instructor ID</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="Instructor ID">
                        </div>      
                    </div>
                    -
                    <div class="form-group">
                        <button type="button" class="btn btn-lg" id="loginBTN" onclick="location.href='dashboard.php';">Login</button>
                    </div>
               </form>                
            </div>
            
            <div class="col-sm-12" style="padding-top: 20px; text-align: center"><a href="../index.php">Go Back</a></div>
        </div>
        
        <div class="col-sm-4"></div>
    </div>
    
    <div class="row" style="position: absolute; right: 20px; bottom: 0px;">
        <!--Button that will trigger the modal.-->
        <button type="button" class="btn" data-toggle="modal" data-target=".registration-modal" id="registerBTN">Create an admin account.</button>
        
        <div class="modal fade registration-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="post" enctype="multipart/form-data">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h5 class="modal-title" id="add-eventLabel">Create an administrator account.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--Modal Body-->
                            <div class="modal-body">
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
                            </div>
                            <!--Modal Footer-->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-md btn-success" name="admin_sign_up" value="Register" dismiss="modal">
                            </div>
                            <?php
                                    if(isset($_POST['admin_sign_up'])) {
                                        $first_name = htmlentities(mysqli_real_escape_string($connection, $_POST['first_name']));
                                        $last_name = htmlentities(mysqli_real_escape_string($connection, $_POST['last_name']));
                                        $instructor_id = htmlentities(mysqli_real_escape_string($connection, $_POST['instructor_id']));
                                        $phone_number = htmlentities(mysqli_real_escape_string($connection, $_POST['phone_number']));
                                        $email_address = htmlentities(mysqli_real_escape_string($connection, $_POST['email_address']));

                                        $insert = "INSERT INTO admin(admin_first_name, admin_last_name, instructorID, phoneNumber, emailAddress, registration_date) VALUES('$first_name', '$last_name', '$instructor_id', '$phone_number', '$email_address', NOW())";

                                        $query = mysqli_query($connection, $insert);

                                        if($query) {
                                            echo "<script>alert('Registration successful')</script>";
                                        } else {
                                            echo "<script>alert('Uh oh! There seems to be a problem in the required fields.')</script>";
                                        }
                                    }
                                ?>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>