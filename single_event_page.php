<!DOCTYPE HTML>
<?php
    include("includes/navbar.php");
    include("connection.php");
    session_start();
    
    $event_title = $_GET["event_title"];
    $event_posted = $_GET["event_posted"];
    $event_description = $_GET["event_description"];
    $event_image = $_GET["event_image"];
    $event_id = $_GET["event_id"];
    $event_venue = $_GET["event_venue"];
    $event_date = $_GET["event_date"];

?>

<html>
<head>
    <title>New Era University | Events | <?php echo $event_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/scrollbar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        overflow-x: hidden;
    }     
    
    .main-content {
        padding-top: 100px;
    }
    
    #registerBTN {
        flex: 1 1 auto;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        text-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        width: 100%;
        height: 40px;
    }
    
    #registerBTN {
        background-image: linear-gradient(to right, #330867 0%, #30cfd0 51%, #330867 100%);
    }
    #registerBTN:hover {
        background-position: right center; /* change the direction of the change here */
    }
    
</style>
<body>
    <div class="row main-content"  style="padding-bottom: 100px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-6" style="border-right: 1px solid #000;">
            <h2><?php echo $event_title; ?></h2>
            <p><small class="text-muted">Posted on <?php echo $event_posted; ?></small></p>
            <img class="card-img-top" src="event_pictures/<?php echo $event_image; ?>" alt="Card image cap">
            <p><br> <?php echo $event_description; ?></p>
        </div>
       <div class="col-sm-2">
            <h3>Interested?</h3>
            <p><small class="muted"><b>Note: </b>This event is for New Era University. Please register for your attendance.</small></p>
            
            <!--Button that will trigger the modal.-->
            <button type="button" class="btn" data-toggle="modal" data-target=".registration-modal" id="registerBTN">Register</button>
           
            <div class="modal fade registration-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="post" enctype="multipart/form-data">
                            <!--Modal Header-->
                            <div class="modal-header">
                                <h5 class="modal-title" id="add-eventLabel">Register to <?php echo $event_title; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--Modal Body-->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="first_name">First Name:</label>
                                        <input type="text" name="reg_First" class="form-control" id="first_name" placeholder="First Name" required="required">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="last_name">Last Name:</label>
                                        <input type="text" name="reg_Last" class="form-control" id="last_name" placeholder="Last Name" required="required">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="student_id">Student ID</label>
                                        <input type="text" name="reg_student_ID" class="form-control" id="student_id"  name="student_id" placeholder="Student ID" value="" required="required">
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label for="cellphone_number">Phone Number</label>
                                        <input type="text" name="reg_phone_number" class="form-control" id="cellphone_number" placeholder="Phone Number" required="required">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="email_address">Email Address</label>
                                        <input type="email" name="reg_email_address" class="form-control" id="email_address" placeholder="Email Address" required="required">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock" required="required"></i></span>
                                        <label for="json-one">Department</label>
                                        <select name="reg_dept_courses" id="json-one" class="form-control">
                                            <option selected value="base" disabled>Select a Department</option>
                                            <option value="College of Accountancy">College of Accountancy</option>
                                            <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                                            <option value="College of Business Administration">College of Business Administration</option>
                                            <option value="College of Communication">College of Communication</option>
                                            <option value="College of Computer Studies">College of Computer Studies</option>
                                            <option value="College of Criminology">College of Criminology</option>
                                            <option value="College of Education">College of Education</option>
                                            <option value="College of Engineering and Architecture">College of Engineering and Architecture</option>
                                            <option value="College of Law">College of Law</option>
                                            <option value="College of Medical Technology">College of Medical Technology</option>
                                            <option value="College of Medicine">College of Medicine</option>
                                            <option value="College of Midwifery">College of Midwifery</option>
                                            <option value="College of Music">College of Music</option>
                                            <option value="College of Nursing">College of Nursing</option>
                                            <option value="College of Pyshical Therapy">College of Pyshical Therapy</option>
                                            <option value="College of Respiratory Therapy">College of Respiratory Therapy</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="json-two">Course</label>
                                        <select name="reg_courses" id="json-two" class="form-control" required="required">
                                            <option>Choose from department</option>
                                        </select>
                                    </div>                                     
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="event_id">Event ID</label>
                                        <!--Replace value with event address from the database-->
                                        <input type="text" name="reg_Event_ID" class="form-control" id="event_id" value="<?php echo $event_id; ?>" disabled>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="event_address">Venue</label>
                                        <!--Replace value with event address from the database-->
                                        <input type="text" name="req_Venue" class="form-control" id="event_address" value="<?php echo $event_venue; ?>" disabled>
                                    </div>
                                    
                                    <div class="form-group col-sm-3">
                                        <label for="event_date">Event Date</label>
                                        <!--Replace value with event address from the database-->
                                        <input type="text" name="reg_Event_Date" class="form-control" id="event_date" value="<?php echo $event_date; ?>" disabled>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--Modal Footer-->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-md btn-success" value="Done" name="student_register" dismiss="modal">
                            </div>
                            <?php 
                                if(isset($_POST['student_register'])) {
                                    $first_name = htmlentities(mysqli_real_escape_string($connection, $_POST['reg_First']));
                                    $last_name = htmlentities(mysqli_real_escape_string($connection, $_POST['reg_Last']));
                                    $student_id = htmlentities(mysqli_real_escape_string($connection, $_POST['reg_student_ID']));
                                    $phone_number = htmlentities(mysqli_real_escape_string($connection, $_POST['reg_phone_number']));
                                    $email_address = htmlentities(mysqli_real_escape_string($connection, $_POST['reg_email_address']));
                                    $department = htmlentities(mysqli_real_escape_string($connection, $_POST['reg_dept_courses']));
                                    $courses = htmlentities(mysqli_real_escape_string($connection, $_POST['reg_courses']));
                                    
                                    
                                    $insert = "INSERT INTO registeredattendees (regFirstName, regLastName, regStudentID, regPhoneNumber, regEmailAdress, department, courses, registration_date, registered_event_id, registered_event_venue, registered_event_date) VALUES('$first_name', '$last_name', '$student_id', '$phone_number', '$email_address', '$department', '$courses', NOW(), '$event_id', '$event_venue', '$event_date')";

                                    $query = mysqli_query($connection, $insert);
                                    
                                    if($query) {
                                        echo "<script>window.open('attendance_pdf.php?event_title=$event_title&event_id=$event_id&event_venue=$event_venue&event_date=$event_date&first_name=$first_name&last_name=$last_name&student_id=$student_id&phone_number=$phone_number&email_address=$email_address&department=$department&courses=$courses', '_self')</script>";
                                    } else {
                                        echo "OH CRAP!";
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>           
       </div>
       <div class="col-sm-2"></div>
    </div>
</body>
</html>


<script>
    $(function() {

        $("#json-one").change(function() {

            var $dropdown = $(this);

            $.getJSON("jsondata/academics.json", function(data) {

                var key = $dropdown.val();
                var vals = [];
                switch(key) {
                    case 'College of Accountancy':
                        vals = data.accountancy.split(",");
                        break;
                    case 'College of Arts and Sciences':
                        vals = data.artsAndSciences.split(",");
                        break;
                    case 'College of Business Administration':
                        vals = data.businessAdministration.split(",");
                        break;
                    case 'College of Communication':
                        vals = data.communication.split(",");
                        break;
                    case 'College of Computer Studies':
                        vals = data.computerStudies.split(",");
                        break;
                    case 'College of Criminology':
                        vals = data.criminology.split(",");
                        break;
                    case 'College of Education':
                        vals = data.education.split(",");
                        break;
                    case 'College of Engineering and Architecture':
                        vals = data.engineeringAndArchitecture.split(",");
                        break;
                    case 'College of Law':
                        vals = data.law.split(",");
                        break;
                    case 'College of Medical Technology':
                        vals = data.medicalTechnology.split(",");
                        break;
                    case 'College of Medicine':
                        vals = data.medicine.split(",");
                        break;
                    case 'College of Midwifery':
                        vals = data.midwifery.split(",");
                        break;
                    case 'College of Music':
                        vals = data.music.split(",");
                        break;
                    case 'College of Nursing':
                        vals = data.nursing.split(",");
                        break;
                    case 'College of Pyshical Therapy':
                        vals = data.physicalTherapy.split(",");
                        break;
                    case 'College of Respiratory Therapy':
                        vals = data.respiratoryTherapy.split(",");
                        break;
                    case 'base':
                        vals = ['Please choose from above'];
                }

                var $jsontwo = $("#json-two");
                $jsontwo.empty();
                $.each(vals, function(index, value) {
                    $jsontwo.append("<option>" + value + "</option>");
                });

            });
        });

    });
</script>


<?php include("includes/footer.php") ?>