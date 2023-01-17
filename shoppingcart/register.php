<!-- <?php include('server.php')
 ?> -->
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <div class="header">
        <h2>Customer Registeration</h2>
    </div>

    <form method="post" action="register.php">
    <?php include('errors.php'); ?>

        <div class="input-group">
            <label>User Id</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label>Full Name</label>
            <input type="text" name="name">
        </div>

        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address">
        </div>

        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phoneno">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">

             <!-- try psw validate -->
             <!-- <label for="psw" id="pass">Password</label>
                <input type="password" id="psw" name="passwords" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
        </div>
        <div class="input-group">
            <label id="cpass">Confirm password</label>
            <input type="password" name="cpassword">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form>
</body>
<!-- <script>
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

    var myinput = document.getElementById("psw");
    myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
//-------------- confirm password----------------
if(pass!=cpass){
  alert("Password doesn't match.")
}
else{
  alert("matched")
}
// -------------phone number----------------------


</script> -->

</html>