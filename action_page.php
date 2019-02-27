<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['femail']))  {

  //Email information
  $admin_email = "emily@emilyspielerphotography.com";
  $fname = $_REQUEST['fname'];
  $fname = $_REQUEST['femail'];
  $fname = $_REQUEST['fphone'];
  $fname = $_REQUEST['fnumber'];
  $fname = $_REQUEST['fdate'];
  $fname = $_REQUEST['ftime'];
  $fname = $_REQUEST['fmessage'];

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);

  //Email response
  echo "Thank you for contacting us! someone will be in touch within 24 hours to confirm your reservation";
  }

  //if "email" variable is not filled out, display the form
  else  {
?>

<h1>there was an error please go back and try again<h1>


<?php
  }
?>
