<?php
if(isset($_POST['submit'])){
    $to = "emily@emilyspielerphotography.com"; // this is your Email address
    $from = $_POST['femail']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $fname . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['fmessage'] . $_POST['ftime'] . $_POST['date'] ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
