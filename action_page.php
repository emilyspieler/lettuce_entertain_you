<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

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

<form method="post" name="myForm">
  <label for="fname">Name</label>
    <input type="text" name="fname"><br>

    <label for="femail">Email</label>
    <input type="email" name="femail" id="email"><br>

    <label for="fphone">Phone</label>
    <input type="tel" id="phone" name="fphone"
    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
    <span class="note">Format: 123-456-7890</span><br>

    <label for="fnumber">Number of party members</label>
    <input type="number" name="fnumber"><br>

    <label for="fdate">Desired date of reservation:</label>
    <input type="date" name="fdate"><br>

    <label for="ftime">Desired time of reservation</label>
    <input type="time" id="appt" name="ftime"
    min="9:00" max="18:00"><br>
    <span class="note">Restaurant hours are 9am to 6pm</span><br>

    <label for="fmessage">Any additional Information</label>
    <input type="text" name="fmessage"><br>
    <br>
  <input type="submit" value="Submit">
</form>


<?php
  }
?>
