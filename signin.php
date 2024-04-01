<?php
include('db_connection.php');
session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `myform` WHERE `email` = '$email'";
    
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];

        if($password === $stored_password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;

            header('Location: dashboard.php');
            exit;
        } else {
            echo "Incorrect email or password";
        }
    } else {
        echo "User not found";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In - My Website</title>
  <link rel="stylesheet" href="look.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
  />
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Test Form</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container signin-container">
    <p class="signin-title">Sample Sign In Form</p>

    <form action="signin.php" method="post">
      <div class="form-group signin-form-group">
        <label for="exampleInputEmail" class="signin-label">Email address</label>
        <input
          type="email"
          class="form-control"
          name="email"
          placeholder="Enter email"
          required
        />
      </div>

      <div class="form-group signin-form-group">
        <label for="exampleInputPassword" class="signin-label">Password</label>
        <input
          type="password"
          class="form-control"
          name="password"
          placeholder="Enter password"
          required
        />
      </div>
      <p>
        Don't have an account?
        <a href="signup.php" class="signin-link">Sign up</a>
      </p>

      <button type="submit" class="btn btn-primary signin-button">Sign In</button>
    </form>
  </div>
</body>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"
></script>
</html>
