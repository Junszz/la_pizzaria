function chkName(event) {

    // Get the target node of the event
    
    var name = event.currentTarget;
    
    // Test the format of the input name  
    var pos1 = name.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+$/);
    var pos2 = name.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+$/);
    var pos3 = name.value.search(/^[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+ ?[A-Z][a-z]+$/);
    
    if (pos1 != 0 && pos2 != 0 && pos3 != 0) {
      alert("The name you entered (" + name.value + 
            ") is not in the correct form. \n" +
            "The correct form is: " +
            "First-name Last-name\n" +
            "First letters are capitalized");
      name.focus();
      name.select();
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
function chkDate(event) {
  var myDate = event.currentTarget;
  const input = new Date(myDate.value);
  input.setHours(0, 0, 0, 0); 
  const today = new Date();
  today.setHours(0, 0, 0, 0);  
  if (input <= today ) {
    alert("You can only choose date from tomorrow onwards");
  }
}    
    
    