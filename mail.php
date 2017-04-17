<?php 

// Global Configuration start: From here you can change the email-id of receiver, cc, from email-id & subject;
$to = "andy@luxurylimousinesales.com";
$from = "LLS";
$cc = "";
$subject = "Message from Client";
// Global configuration end
$errmasg = "";

 $name = htmlentities(trim($_POST['name']));
 $phoneNumber = htmlentities(trim($_POST['phoneNumber']));
 $email = htmlentities(trim($_POST['email']));
 $subject = htmlentities(trim($_POST['company']));
 $message = htmlentities(trim(nl2br($_POST['message'])));
 
if($email){
$message = "<table border='0' cellpadding='2' cellspacing='2' width='600'>
<tr><td>Name: ".$name." </td></tr>
<tr><td>Phone Number: ".$phoneNumber." </td></tr>
<tr><td>Email: ".$email."</td></tr>
<tr><td>Subject: ".$subject."</td></tr>
<tr><td>Message:".$message."</td></tr>
</table>";
 
 } else{
 	
$errmasg = "No Data";	
 }
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$from . "\r\n";
$headers .= 'Cc:'.$cc . "\r\n";



if($errmasg == ""){
if(mail($to,$subject,$message,$headers)){
     echo 'Message sent.<br><a href="index.php">Return to home</a>';   
}else{
    echo 'Error occurred while sending email';
}
}else{
    echo $errmasg;
}
?>