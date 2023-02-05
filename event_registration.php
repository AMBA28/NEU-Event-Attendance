<!DOCTYPE html>
<?php
include("includes/navbar.php");
	$connection = mysqli_connect("localhost", "root", "", "neueventattendance"); //Connection variable
	
	if(mysqli_connect_error()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
	else {
		echo "Connection completed!!!";
	}

$reg_first_name = ""; //Register First Name
$reg_last_name = ""; //Register Last Name
$reg_student_ID = ""; //Register Student ID
$reg_phone_number = ""; //Register Phone Number
$reg_email_address = ""; //Register Email Address

	if(isset($_POST['reg_button'])) {
		
		//First Name
		$reg_first_name = strip_tags($_POST['reg_First']); // Remove html tags
		$reg_first_name = ucfirst(strtolower($reg_first_name)); //Uppercase first letter
	
		//Last Name
		$reg_last_name = strip_tags($_POST['reg_Last']); // Remove html tags
		$reg_last_name = ucfirst(strtolower($reg_last_name)); //Uppercase first letter
	
		//Email Address
		$reg_student_ID = strip_tags($_POST['reg_student_ID']); // Remove html tags
		
		//Phone Number
		$reg_phone_number = strip_tags($_POST['reg_phone_number']); // Remove html tags
		
		//Email Address
		$reg_email_address = strip_tags($_POST['reg_email_address']); // Remove html tags
		
		//Email Address
		$reg_email_address = strip_tags($_POST['reg_email_address']); // Remove html tags
	echo "Registered";
		$query = mysqli_query($connection, "INSERT INTO registeredattendees (regFirstName, regLastName, regStudentID, regPhoneNumber, regEmailAdress)  VALUES ('$reg_first_name', '$reg_last_name', '$reg_student_ID', '$reg_phone_number', '$reg_email_address')");
		
	}
?>                    
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="neu-logo" sizes="76x76" href="images/New_Era_University.png">
    <link rel="icon" type="image/png" href="images/New_Era_University.png">
    <title>Registration | <!--Insert the event title here--></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/scrollbar.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</head>
<style>
    body {
        overflow-x: hidden;
    }
    #registerBTN {
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
    
    #registerBTN {
        background-image: linear-gradient(to right, #330867 0%, #30cfd0 51%, #330867 100%);
    }
    #registerBTN:hover {
        background-position: right center; /* change the direction of the change here */
    }
</style>
<body>
    <script>
		$(function() {
			
			$("#json-one").change(function() {
			
				var $dropdown = $(this);
			
				$.getJSON("jsondata/academics.json", function(data) {
				
					var key = $dropdown.val();
					var vals = [];
										
					switch(key) {
						case 'accountancy':
							vals = data.accountancy.split(",");
							break;
						case 'artsAndSciences':
							vals = data.artsAndSciences.split(",");
							break;
                        case 'businessAdministration':
							vals = data.businessAdministration.split(",");
							break;
                        case 'communication':
							vals = data.communication.split(",");
							break;
                        case 'computerStudies':
							vals = data.computerStudies.split(",");
							break;
                        case 'criminology':
							vals = data.criminology.split(",");
							break;
                        case 'education':
							vals = data.education.split(",");
							break;
                        case 'engineeringAndArchitecture':
							vals = data.engineeringAndArchitecture.split(",");
							break;
                        case 'law':
							vals = data.law.split(",");
							break;
                        case 'medicalTechnology':
							vals = data.medicalTechnology.split(",");
							break;
                        case 'medicine':
							vals = data.medicine.split(",");
							break;
                        case 'midwifery':
							vals = data.midwifery.split(",");
							break;
                        case 'music':
							vals = data.music.split(",");
							break;
                        case 'nursing':
							vals = data.nursing.split(",");
							break;
                        case 'physicalTherapy':
							vals = data.physicalTherapy.split(",");
							break;
                        case 'respiratoryTherapy':
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
    <div class="row" style="padding-top: 50px;"></div>
    
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Register to <!--Insert event title here--> //Insert event title from database</strong>
                </h5>
                <form action="" method="POST">
                    <div class="form-row" style="padding-left: 10px; padding-right: 10px; padding-top: 30px;">
                        <div class="form-group col-md-6">
                            <label for="first_name">First Name</label>
                            <input type="text" name="reg_First" class="form-control" id="first_name" placeholder="First Name" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="reg_Last" class="form-control" id="last_name" placeholder="Last Name" required="required">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="student_id">Student ID</label>
                            <input type="text" name="reg_student_ID" class="form-control" id="student_id"  name="student_id" placeholder="Student ID" value="" required="required">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="cellphone_number">Phone Number</label>
                            <input type="text" name="reg_phone_number" class="form-control" id="cellphone_number" placeholder="Phone Number" required="required">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="email_address">Email Address</label>
                            <input type="email" name="reg_email_address" class="form-control" id="email_address" placeholder="Email Address" required="required">
                        </div>
                        
                        <div class="form-group col-md-6">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-lock" required="required"></i></span>
                            <label for="json-one">Department</label>
                            <select name="reg_dept_courses" id="json-one" class="form-control">
                                <option selected value="base" disabled>Select a Department</option>
                                <option value="accountancy">College of Accountancy</option>
                                <option value="artsAndSciences">College of Arts and Sciences</option>
                                <option value="businessAdministration">College of Business Administration</option>
                                <option value="communication">College of Communication</option>
                                <option value="computerStudies">College of Computer Studies</option>
                                <option value="criminology">College of Criminology</option>
                                <option value="education">College of Education</option>
                                <option value="engineeringAndArchitecture">College of Engineering and Architecture</option>
                                <option value="law">College of Law</option>
                                <option value="medicalTechnology">College of Medical Technology</option>
                                <option value="medicine">College of Medicine</option>
                                <option value="midwifery">College of Midwifery</option>
                                <option value="music">College of Music</option>
                                <option value="nursing">College of Nursing</option>
                                <option value="physicalTherapy">College of Pyshical Therapy</option>
                                <option value="respiratoryTherapy">College of Respiratory Therapy</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="json-two">Course</label>
                            <select name="reg_courses" id="json-two" class="form-control" required="required">
                                <option>Choose from department</option>
                            </select>
                        </div> 
                        
                        <div class="form-group col-md-12">
                            <hr>
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="event_id">Event ID</label>
                            <!--Replace value with event address from the database-->
                            <input type="text" name="reg_Event_ID" class="form-control" id="event_id" value="007" disabled>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="event_address">Venue</label>
                            <!--Replace value with event address from the database-->
                            <input type="text" name="req_Venue" class="form-control" id="event_address" value="<?php ?>University Hall" disabled>
                        </div>
                        
                        
                        <div class="form-group col-md-12">
                            <input type="submit" name="reg_button" class="btn btn-lg" id="registerBTN" data-toggle="modal" data-target="#exampleModal" value="Register">
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Registration Complete!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>You have registered to the event: <!--Event title here--></p>
                                            <small>Please download the PDF below. This will serve as your attendance for the event.</small>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-md btn-success" value="Great!" dismiss="modal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <?php include("includes/footer.php")?>
</body>
</html>