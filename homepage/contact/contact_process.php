<?php

//define variables and set to empty values
$name_error = $email_error = $phone_error = $mailError = $emptyErrorFailure = "";
$name = $email = $phone = $message = $success = "";

//form is submitted with POST method
// if($_SERVER["REQUEST_METHOD"] == "POST"){
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){

    if(empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        //check if name only contains leters andd whitespace
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $name_error = "Only letters and white space allowed";
        }
    }

    if(empty($_POST["email"])){
        $email_error = "Email is required";
    } else {
       $email = test_input($_POST["email"]);
       //check if e-mail address is well-formed
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $email_error = "Invalid email format";
       }

    }

    if(empty($_POST["phone"])){
        $phone_error = "Phone is required";
    } else {
        $phone = test_input($_POST["phone"]);
        //check if e-mail address is well-formed
        if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)){
        $phone_error = "Invalid phone number";
        }
    }

    if(empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }

    if($name_error == '' and $email_error == '' and $phone_error == ''){
        // echo $message;
        // https://www.youtube.com/watch?v=4_NP_WYFmIM
        // https://stackoverflow.com/questions/14073051/xampp-sendmail-not-working-properly
        $to = "customerservice@thephynix.com";
        $headers = "From:" . $email;
        $subject = "Landing/Home Page Contact Form";
        // mail($to,$subject,$message,$headers);
        if (mail($to, $subject, $message,$headers)){
            // echo $message;
            $success = "Message sent, thank you for contacting us!";
            $name = $email = $phone = $message = '';

        } else {
            $mailError = "Messaged failed to send.";
        }

    }else {
           $emptyErrorFailure = "Input fields are empty";
    }

    echo json_encode(
        array(
            'success' => $success,
            'mailError' => $mailError,
            'emptyErrorFailure' => $emptyErrorFailure,
            'nameError' => $name_error,
            'emailError' => $email_error,
            'phoneError' => $phone_error

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
