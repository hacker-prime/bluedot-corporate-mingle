<?php

// Inspired by phoenixprime.io which is in turned inspired by HTML/PHP Contact Form Tutorial with Validation and giveaway_email Submit || https://www.youtube.com/watch?v=1CkBsGhux9U

//define variables and set to empty values
$giveaway_name_error = $giveaway_email_error = $mailError = $emptyErrorFailure = "";
$giveaway_name = $giveaway_email = $phone = $message = $success = "";


if (isset($_POST['giveaway_name']) && isset($_POST['giveaway_email']) && isset($_POST['giveaway_message'])){    
        
    if(empty($_POST["giveaway_name"])) {
        $giveaway_name_error = "Name is required";
    } else {
        $giveaway_name = test_input($_POST["giveaway_name"]);
        //check if giveaway_name only contains leters andd whitespace
        // https://stackoverflow.com/questions/15472764/regular-expression-to-allow-spaces-between-words
        if(!preg_match("/^[a-zA-Z ]*$/",$giveaway_name)){
            $giveaway_name_error = "Only letters allowed";
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


    if($giveaway_name_error == '' && $giveaway_email_error == '' && !empty($_POST["giveaway_message"]) ){


        $giveaway_emailTo = $_POST['giveaway_email'];

        // ==========> INSERT FORM DATA INTO DATABASE <==========

            $success = "Database stage ready to commence";

        // ==========> INSERT FORM DATA INTO DATABASE <==========


    } else {
        $emptyErrorFailure = "Input fields are empty";
    }   

    echo json_encode(
        array(
            'success' => $success,
            'mailError' => $mailError,
            'emptyErrorFailure' => $emptyErrorFailure,
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



