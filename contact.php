<?php
$insert = false;
if(isset($_POST['Firstname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
   // Collect post variables
    $Firstname= $_POST['Firstname'];
    $Lastname= $_POST['Lastname'];
    $service= $_POST['services'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $address=$_POST['address'];
    $message=$_POST['message'];
    
    $sql = "INSERT INTO `civil_tech`.`contact` (`Firstname`, `Lastname`, 'service', `email`, `phonenumber`, `address`, `message`) VALUES ('$Firstname', '$Lastname','$service',  '$email', '$phonenumber', '$address', '$message');";

// Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql<br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    <script src="https://kit.fontawesome.com/977bef89d8.js" crossorigin="anonymous"></script>
</head>
<body>
<br/>
    <div class="contact-form ">
        <div class="first-container">
            <div class="info-container">
                <div>
                    <h3>Service mail Ids:</h3>
                    <h4>-please contact based on what service you want</h4>
                    <p>customerservice:customerservice@gmail.com<br>sales:sales@gmail.com<br>complaints:complaints@gmail.com</p>
                </div>
                <div>
                    <h3>phone number:</h3>
                    <p>9632587410</p>
                </div>
                <div>
                    <h3>general support email:</h3>
                    <p>contact@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="second-container">
            <h2>Enter Your details</h2>
            <form method="post" action="contact.php">
                <div class="formgroup">
                    <label for="name-iput">name*</label>
                    <input id="name-input" name="Firstname" type="text" placeholder="First name" required='*'>
                    <input name="Lastname" type="text" placeholder="Last name" required="*">          
                </div>
                <div class="formgroup" >
                    <label for="service-input">service type*</label>
                   <select class='service' name="services">>
                     <option value='Interior Design'>Interior Design</option>
                     <option value='Echo Sounding Inspections'>Echo Sounding Inspections</option>
                     <option value='Project Management'>Project Management</option>
                     <option value='Vessel And Traffic Simulation'>Vessel And Traffic Simulation</option>
                     <option value='Contruction Coating Materials'>Contruction Coating Materials</option>
                     <option value='Insulation Materials'>Insulation Materials</option>
                  </select>
                </div>
                <div class="formgroup">
                    <label for="email-input">email*</label>
                    <input name="email" id="email-input" type="text" placeholder="eg.example@gmail.com" required='*'>
                </div>
                <div class="formgroup">
                    <label for="phone-input">phone number*</label>
                    <input name="phonenumber" id="phone-input" type="text" placeholder="eg.9563287410" required='*'>
                </div>
                <div class="formgroup">
                    <label for="Address">Address*</label>
                    <textarea  name="address" id="Address" placeholder="enter your address"required=""></textarea>
                </div>
                <div class="formgroup">
                    <label for="message text area">message</label>
                    <textarea name="message" id="message text area" placeholder="write us your reason"></textarea>
                </div>
                <button>send message</button>
            </form>
            
        </div>
    </div>
    <div class="footer">
        <div class="first-container">
            <div class="info-container">
                <div>
                    <h3>Location:</h3>
                    <p>Surya nagar road no-3 Bijulia talab road<br> ward no -8 Ramgarh canttRamgarh<br> Jharkhand 829122</p>
                    <i class="fas fa-phone-square-alt"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>
            
        </div>
        <div class="second-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d1827.7498521117386!2d85.515965!3d23.622269!3m2!1i1024!2i768!4f13.1!2m1!1sRd%20Number%203%20Ramgarh%20Cantonment%2C%20Jharkhand%20829122!5e0!3m2!1sen!2sin!4v1623425942284!5m2!1sen!2sin" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    
</body>
</html>