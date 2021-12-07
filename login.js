function signIn(){
  
  // Email accessed via email.value
  // Password accessed via password.value

  var username = document.getElementById("username");
  var password = document.getElementById("password");

  var usernameActual = ""; // add username
  var passwordActual = ""; // add password

  // For testing:
  /*
  console.log(username.value);
  console.log(password.value);
  */
  
  if (username.value == usernameActual && password.value == passwordActual) {
    window.open("homepage.html", "_self");
  } else {
    window.alert("Access denied. Please try again.");
  }

}