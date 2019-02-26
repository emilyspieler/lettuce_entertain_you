function validateForm() {
var v = document.forms["myForm"]["fname"].value;
var w = document.forms["myForm"]["femail"].value;
var x = document.forms["myForm"]["fphone"].value;
var y = document.forms["myForm"]["fdate"].value;
var z = document.forms["myForm"]["ftime"].value;
var zz = document.forms["myForm"]["fmessage"].value;

if (v == "") {
  alert("Name must be filled out");
  return false;
}

else if (w == "") {
  alert("Email must be filled out");
  return false;
}

else if (x == "") {
  alert("Phone must be filled out");
  return false;
}

else if (y == "") {
  alert("Date must be filled out");
  return false;
}

else if (z == "") {
  alert("Time must be filled out");
  return false;
}

else if (zz == "") {
  alert("Message must be filled out");
  return false;
}

}
