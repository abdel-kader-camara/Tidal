var check = function() {
    if (document.getElementById('password').value ==
      document.getElementById('cpassword').value) {
     alert("Mot de passe identiques");
    } else {
        alert("Mot de passe différents");
    }
  }