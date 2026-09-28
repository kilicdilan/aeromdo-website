<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG = "Message is required ";
} else {
    $message = $_POST["message"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = "<aeromdo@itu.edu.tr>, <nikbay@itu.edu.tr>";
$Subject = "[AEROMDO CONTACT FORM] New message from AeroMDO Webpage Contact Form";

// prepare email body text
$Body = "";
$Body .= "Hello,";
$Body .= "\n";
$Body .= "\n";
$Body .= "There is a new message from the contact form!";
$Body .= "\n";
$Body .= "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";
$Body .= "\n";
$Body .= "Please respond to the person whose contact information is shown above and delete this e-mail after this process!";
$Body .= "\n";
$Body .= "\n";
$Body .= "Sincerely,";
$Body .= "\n";
$Body .= "\n";
$Body .= "AeroMDO Team";
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>