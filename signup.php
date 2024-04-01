<?php
include('db_connection.php');

$insert = false;

if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $age = $_POST['age'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $sql = "INSERT INTO `myform` (`firstname`, `lastname`, `age`, `email`, `password`, `dt`) VALUES ('$firstname', '$lastname', '$age', '$email', '$password', current_timestamp())";

    if ($con->query($sql) === true) {
        $insert = true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My website</title>
    <link rel="stylesheet" href="look.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Test Form</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav" style="margin-right: 10px">
          <li class="nav-item">
            <a
              class="nav-link"
              href="signin.php"
              style="
                background-color: #007bff;
                color: #fff;
                border-radius: 5px;
                padding: 8px 15px;
              "
              >Sign In</a
            >
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <body>
  
  <div class="container">
    <form action="signup.php" method="post">
      
        <p class="title">Sample SignUp Form</p>
        <?php
        if($insert == true){
            echo "<p style='color: rgb(16, 63, 16); font-size:30px;' class='registration'>Thanks for getting registered</p>";
        }
        ?>
        <div class="form-group">
          <label for="exampleInputFirstname">First Name</label>
          <input
            type="text"
            class="form-control"
            name="firstname"
            placeholder="Firstname"
            required
          />
        </div>

        <div class="form-group">
          <label for="exampleInputLastname">Last Name</label>
          <input
            type="text"
            class="form-control"
            name="lastname"
            placeholder="Lastname"
            required

          />
        </div>

        <div class="form-group">
          <label for="exampleInputAge">Age</label>
          <input
            type="number"
            class="form-control"
            name="age"
            placeholder="Age"
            required

          />
        </div>

        <div class="form-group">
          <label for="exampleInputEmail">Email address</label>
          <input
            type="email"
            class="form-control"
            name="email"
            required
            placeholder="Enter email"
          />
        </div>

        <div class="form-group">
          <label for="exampleInputPassword">Password</label>
          <input
            type="password"
            class="form-control"
            name="password"
            required
            placeholder="Enter password"
          />
        </div>

        <p>Already have an account? <a href="signin.php">Sign in</a></p>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
  <!-- INSERT INTO `myform` (`id`, `firstname`, `lastname`, `age`, `email`, `password`, `dt`) VALUES ('1', 'test_name', 'test_lastname', '12', 'test@gmail.com', '123456', current_timestamp()); -->
</html>
