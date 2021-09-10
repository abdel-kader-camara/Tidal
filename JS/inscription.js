function verif() {
    if (document.getElementById('password').value ==
      document.getElementById('cpassword').value) {
        window.location.href = "http://google.com";
    } else {
        alert("Mot de passe différents");
    }
  }