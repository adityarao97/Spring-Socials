<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["addr"]==""||$_POST["phone"]==""||$_POST["fvname"]==""||$_POST["lvname"]==""||$_POST["vemail"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$fname=$_POST['fvname'];
$lname=$_POST['lvname'];
$message=$_POST['msg'];
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = "wish to contact"
$message = $fname." ".$lname."\n".$_POST['msg'];
$headers = 'From:'. $email; // Sender's Email
$headers = 'Cc:'. $email; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("just.chill.sit@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>