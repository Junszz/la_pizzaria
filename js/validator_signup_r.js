var firstnameNode = document.getElementById("firstname");
var lastnameNode = document.getElementById("lastname");
var contactnoNode = document.getElementById("contactno");
var emailNode = document.getElementById("email");
var passwordNode = document.getElementById("password");

// if there is a change will trigger event listener
// Use
firstnameNode.addEventListener("change", chkFirstName, false);
lastnameNode.addEventListener("change", chkLastName, false);
contactnoNode.addEventListener("change", chkContact, false);
emailNode.addEventListener("change", chkEmail, false);
passwordNode.addEventListener("change", chkPassword, false);
