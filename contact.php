<?php
  if(isset($_POST['submit'])){
    $mail= "mehiopsss@gmail.com";
    $from = $_POST['email']; // senders email address
    $name = $_POST['name']; // user name
    $subject = $_POST['subject'];
    $subject2 = "Your message submitted successful"; //this is for client
    $message = "Client name: ". $name. "Wrote the following messsage". "/n/n". $_POST['message'];
    $message2 ="Dear ". $name."Thank you for contacting us! We'll get back to you shortly";
    $headers = "From: ". $from;
    $headers2 = "From: ". $mail; // this will receive to client
    $result = mail($mail, $subject, $message, $headers);//send email to user as well
    $result2 = mail($from, $subject2, $message2, $headers2); //send email to user as well
    if($result){ //if email is submitted succesfully
        echo '<script type="text/javascript">alert("Message was sent Thank you ! we will contact you soon)</script> ';
    }
    else{
       echo ' <script type="text/javascript">alert("Submisstion failed")</script>';
    }
    }
  
?>