      var customerNode = document.getElementById("name");
      var emailNode = document.getElementById("email");
      var dateNode = document.getElementById("Date");

      // if there is a change will trigger event listener
      // Use
      customerNode.addEventListener("change", chkName, false);
      emailNode.addEventListener("change", chkEmail, false);
      dateNode.addEventListener("change", chkDate, false);
