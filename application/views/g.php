

<link href="./assets/css/validation.scss" rel="stylesheet/scss" type="text/css" media="all">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  </head>

<form action="#0">

  <div>
    <input type="text" id="first_name" name="first_name" required placeholder=" " />
    <label for="first_name">First Name</label>

  </div>
  
  <div>
    <input type="text" id="last_name" name="last_name" required placeholder=" " />
    <label for="last_name">Last Name</label>
  </div>
  
  <div>
    <input type="email" id="email" name="email" required placeholder=" " />
    <label for="email">Email Address</label>
    <div class="requirements">
      Must be a valid email address.
    </div>
  </div>
  
  <div>
    <input type="password" id="password" name="password" required placeholder=" " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" />
    <label for="password">Password</label>
    <div class="requirements">
      Your password must be at least 6 characters as well as contain at least one uppercase, one lowercase, and one number.
    </div>
  </div>
  
  <input type="submit" value="Sign Up" />

</form>
