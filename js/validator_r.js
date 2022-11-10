var emailNode = document.getElementById("email");
var passwordNode = document.getElementById("password");

// if there is a change will trigger event listener
// Use
emailNode.addEventListener("change", chkEmail, false);
passwordNode.addEventListener("change", chkPassword, false);
