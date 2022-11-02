function chkFirstName(event) {

  // Get the target node of the event
  
  var firstname = event.currentTarget;
  
  // Test the format of the input name  
  var pos1 = firstname.value.search(/^[A-Z][a-z]+$/);
  var pos2 = firstname.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+$/);
  var pos3 = firstname.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+$/);
  var pos4 = firstname.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+$/);

  
  if (pos1 != 0 && pos2 != 0 && pos3 != 0 && pos4 != 0) {
    alert("The name you entered (" + firstname.value + 
          ") is not in the correct form. \n" +
          "The correct form should be: " +
          "Only contains alphabet and the first letters are capitalized");
      firstname.focus();
      firstname.select();
    return false;
  } 
}
function chkLastName(event) {

  // Get the target node of the event
  
  var lastname = event.currentTarget;
  
  // Test the format of the input name  
  var pos1 = lastname.value.search(/^[A-Z][a-z]+$/);
  var pos2 = lastname.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+$/);
  var pos3 = lastname.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+$/);
  var pos4 = lastname.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+$/);

  
  if (pos1 != 0 && pos2 != 0 && pos3 != 0 && pos4 != 0) {
    alert("The name you entered (" + lastname.value + 
          ") is not in the correct form. \n" +
          "The correct form should be: " +
          "Only contains alphabet and the first letters are capitalized");
          lastname.focus();
          lastname.select();
    return false;
  } 
}
function chkContact(event) {
    var myContact = event.currentTarget;
    var pos1 = myContact.value.search(/^(\d+-)*(\d+)$/);

    if (pos1 != 0) {
        alert("The contact number you entered (" + myContact.value + 
              ") is not in the correct form. \n" +
              "The correct form is: " +
              "xxxx xxxx\n" +
              "Only digits are allowed");
        myContact.focus();
        myContact.select();
        return false;
      }
  }     
function chkEmail(event) {
  var email = event.currentTarget;
  
  var pos1 = email.value.search(/^[A-Za-z.-]+@[A-Za-z]+\.[A-Za-z]{2,3}$/);
  var pos2 = email.value.search(/^[A-Za-z.-]+@[A-Za-z]+\.[A-Za-z]+\.[A-Za-z]{2,3}$/);
  var pos3 = email.value.search(/^[A-Za-z.-]+@[A-Za-z]+\.[A-Za-z]+\.[A-Za-z]+\.[A-Za-z]{2,3}$/);
  
  if (pos1 != 0 && pos2 != 0 && pos3 != 0) {
    alert("The email you entered (" + email.value + 
          ") is not in the correct form. \n" +
          "The correct form is: " +
          "email@example.com\n" +
          "No digits is allowed.");
    email.focus();
    email.select();
    return false;
  } 
}   
function chkPassword(event) {
  var password = event.currentTarget;
  
  var pos1 = password.value.search(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/);
  
  if (pos1 != 0) {
    alert("For safety reason, the password you entered (" + password.value + 
          ") should contain at least 7 characters and also include at least one numeric digit and special character. \n");
          password.focus();
          password.select();
    return false;
  } 
} 