<?php
$errorMSG = "";


if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}


$EmailTo = "<aeromdo@itu.edu.tr>, <kilicd15@itu.edu.tr>";
$Subject = "[AEROMDO MAIL LIST] New message from AeroMDO Webpage Mail List";

// prepare email body text
$Body = "";
$Body .= "Hello,";
$Body .= "\n";
$Body .= "\n";
$Body .= "A new follower is at the doorstep!";
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "\n";
$Body .= "Please save this e-mail address to the form below and delete this e-mail after saving!";
$Body .= "\n";
$Body .= "https://docs.google.com/spreadsheets/d/1Nn7WzsdsVsfOEOBzvP-ixE6w8PLgnKJGBh3nlqzVdtE/edit?usp=sharing";
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