<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['femail']))  {

  //Email information
  $admin_email = "emily@introchicago.live";
  $fname = $_REQUEST['fname'];
  $femail = $_REQUEST['femail'];
  $fphone = $_REQUEST['fphone'];
  $fnumber = $_REQUEST['fnumber'];
  $fdate = $_REQUEST['fdate'];
  $ftime = $_REQUEST['ftime'];
  $fmessage = $_REQUEST['fmessage'];

  //send email
  mail($admin_email, "$fname", $fphone, $fnumber, $fdate, $ftime, $fmessage, "From:" . $femail);

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
