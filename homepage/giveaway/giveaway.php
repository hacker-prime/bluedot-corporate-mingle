<?php

require_once("configuration.php");

// Inspired by phoenixprime.io which is in turned inspired by HTML/PHP Contact Form Tutorial with Validation and giveaway_email Submit || https://www.youtube.com/watch?v=1CkBsGhux9U

//define variables and set to empty values
$giveaway_name_error = $first_name_error = $last_name_error = $giveaway_email_error = $mailError = $emptyErrorFailure = "";
$giveaway_name = $giveaway_email = $phone = $message = $success = "";


if (isset($_POST['first_name'])  && isset($_POST['last_name']) && isset($_POST['giveaway_name']) && isset($_POST['giveaway_email']) && isset($_POST['giveaway_message'])){    
        
    if(empty($_POST["giveaway_name"])) {
        $giveaway_name_error = "Company name is required";
    } else {
        $giveaway_name = test_input($_POST["giveaway_name"]);
        //check if giveaway_name only contains leters andd whitespace
        // https://stackoverflow.com/questions/15472764/regular-expression-to-allow-spaces-between-words
        if(!preg_match("/^[a-zA-Z ]*$/",$giveaway_name)){
            $giveaway_name_error = "Only letters allowed";
        }
    }

    if(empty($_POST["first_name"])) {
        $first_name_error = "First name is required";
    } else {
        $first_name = test_input($_POST["first_name"]);
        //check if giveaway_name only contains leters andd whitespace
        // https://stackoverflow.com/questions/15472764/regular-expression-to-allow-spaces-between-words
        if(!preg_match("/^[a-zA-Z ]*$/",$giveaway_name)){
            $first_name_error = "Only letters allowed";
        }
    }

    if(empty($_POST["last_name"])) {
        $last_name_error = "Last name is required";
    } else {
        $last_name = test_input($_POST["last_name"]);
        //check if giveaway_name only contains leters andd whitespace
        // https://stackoverflow.com/questions/15472764/regular-expression-to-allow-spaces-between-words
        if(!preg_match("/^[a-zA-Z ]*$/",$giveaway_name)){
            $last_name_error = "Only letters allowed";
        }
    }



    if(empty($_POST["giveaway_email"])){
        $giveaway_email_error = "Email is required";
    } else {
       $giveaway_email = test_input($_POST["giveaway_email"]);
       //check if e-mail address is well-formed
       if(!filter_var($giveaway_email, FILTER_VALIDATE_EMAIL)){
           $giveaway_email_error = "Invalid email format";
       }
    }
    
    if(empty($_POST["giveaway_message"])) {
        $message = "Message is required";
    } else {
        // $message = test_input($_POST["giveaway_message"]); I am not sure if having this in the else block or statement makes sense because there is no other special thing you have to do to it as compared to name or email. If the message input field is not empty then all you have to do is to apply the test_input function that uses three in built php functions to sanitize or clean it and finally to insert it into the database using preprared statements 
    }


    if($first_name_error == '' && $last_name_error == '' && $giveaway_name_error == '' && $giveaway_email_error == '' && !empty($_POST["giveaway_message"]) ){

        // ==========> INSERT FORM DATA INTO DATABASE <==========
        // https://www.tutorialrepublic.com/php-tutorial/php-mysql-prepared-statements.php

            $message2 = test_input($_POST["giveaway_message"]);

            // Taken from phoenixprime.io
            $timezone = new DateTimeZone('Jamaica');
            $datetime = new DateTime();
            $datetime->setTimezone($timezone);
            $signuptime = $datetime->format('Y-m-d H:i:s');


                // $success = "Database stage ready to commence";

                
            // Prepare an insert statement
            $sql = "INSERT INTO corporatemingle (firstname,lastname,company,email, message,time) VALUES (?, ?, ?, ?, ?, ?)";
            
            if($stmt = $con->prepare($sql)){

                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("ssssss", $first_name, $last_name, $company, $email, $sanitizedmessage,$time);
                                        
                /* Set the parameters values and execute the statement to insert a row */
                $company = $giveaway_name;
                $email = $giveaway_email;
                $sanitizedmessage = $message2;
                $time = $signuptime;

                $stmt->execute();
                
                $success = "You'll be updated if you've won the giveaway :) ";

            } else{
                echo "ERROR: Could not prepare query: $sql. " . $con->error;
            }
            
            // Close statement
            $stmt->close();
            
            // Close connection
            $con->close();

        // ==========> INSERT FORM DATA INTO DATABASE <==========


    } else {
        $emptyErrorFailure = "Input fields are empty";
    }   

    echo json_encode(
        array(
            'success' => $success,
            'mailError' => $mailError,
            'emptyErrorFailure' => $emptyErrorFailure,
            'first_nameError' => $first_name_error,
            'last_nameError' => $last_name_error,
            'giveaway_nameError' => $giveaway_name_error,
            'giveaway_emailError' => $giveaway_email_error,
            'messageError' => $message
        )
    );

} 

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>



