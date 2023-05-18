
<?php
include 'server.php';

session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
  header("Location: index.php");
  exit;
}

// Display the home page content
// echo "Welcome, " . $_SESSION['email'] . "!";

// Add your desired content for the home page here
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
  <link href="../purokmonitoringsystem/css/dashboard.css" rel="stylesheet">
  
<title>PMMS</title>
</head>
<body>

<nav class="img-fluid navbar navbar-expand-lg navbar-custom">
<img class="img-fluid " src="../purokmonitoringsystem/images/pmmslogo.png" alt="pmmslogo" width="50" height="50"><h1 style="color: #16FF00;">PMMS</h1></img>
  <!-- <a class="navbar-brand" href="#">PMMS by M4rk</a> -->

  <button class="navbar-toggler img-fluid" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon img-fluid"></span>
  </button>
  <div class="collapse navbar-collapse img-fluid" id="navbarNav">
    <ul class="navbar-nav ml-auto img-fluid">
      <li class="nav-item img-fluid">
        <a class="nav-link img-fluid" href="#"><i class="fas fa-user"></i> Profile</a>
      </li>
      <li class="nav-item img-fluid">
        <a class="nav-link img-fluid" href="#"><i class="fas fa-bell"></i> Notif.</a>
      </li>
      
      <li class="nav-item img-fluid">
        <a class="nav-link img-fluid" href="disconnect.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid img-fluid">
  <div class="row img-fluid">
    <div class="col-md-2 col-lg-2 col-xl-2 sidebar img-fluid">
      <ul class="nav flex-column img-fluid">
        <li class="nav-item img-fluid">
          <a class="nav-link active" href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i>Population</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Person</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-cog"></i> Manage Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-question-circle"></i> Help</a>
        </li>
      </ul>
    </div>
    <div class="col-md-10 col-lg-10 col-xl-10 content">
<form class="row g-3" id="adddata" name="adddata">
  <div class="col-md-6">
    <label for="FirstName" class="form-label"> First Name</label>
    <input type="text" class="form-control" name="firstname" id="firstname" required>
  </div>
  <div class="col-md-6">
    <label for="LastName" class="form-label"> Last Name</label>
    <input type="text" class="form-control" name="lastname" id="lastname" required>
  </div>
  <br>
  <div class="col-12">
    <label for="Address" class="form-label"> Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="LINOAN, MTV, DDO, PHILIPPINES" required>
  </div>
  <br>
  <div class="col-md-4">
    <label for="Phonenumber" class="form-label"> Phone Number</label>
    <input type="number" class="form-control" id="phonenumber" name="phonenumber" required>
  </div>
  <div class="col-md-4">
    <label for="Gender" class="form-label col-md-4"">Gender</label>
    <br>
    <select id="gender" name="gender" class="form-select col-md-4">
      <option selected>Choose...</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
  <div class="col-md-4">
  <label for="birthdate"> Birthdate:</label>
  <input type="date" class="form-control" id="birthday" name="birthday" required>
</div>
<div class="col-md-4">
    <label for="Status" class="form-label col-md-4"> Status</label>
    <br>
    <select id="status" name="status" class="form-select col-md-4">
      <option selected>Choose...</option>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Separated">Separated</option>
      <option value="Widow">Widow</option>
      <option value="Laon">Laon</option>
    </select>
  </div>
  <br>
  <div class="col-md-4">
    <label for="Age" id="age" name="age" class="form-label"> Age</label>
    <input type="number" class="form-control" id="age" name="age" required>
  </div>
  <div class="col-md-4">
    <label for="Occupation" class="form-label"> Occupation</label>
    <input type="text" class="form-control" id="occupation" name="occupation" required>
  </div>
  <br>
  <br>
    <br>
  <div class="col-12">
    <br>
    <center>
    <button type="" class="btn btn-primary">CLOSE</button>
    <button type="submit" name="submit" id="submit" class="btn btn-primary">SAVE</button>
    </center>
  </div>
</form>
</div>
</div>
</div>


<script>
$(document).ready(function(){
  $('#adddata').submit(function(event){
    event.preventDefault(); // Prevent form submission

    // Get form data
    var formData = $(this).serialize();

    // Send AJAX request to the PHP script
    $.ajax({
      url: 'save_data.php', // Replace with the path to your PHP script
      type: 'POST',
      data: formData,
      success: function(response) {
        // Handle the response from the PHP script
        console.log(response);
        // You can display a success message or perform other actions here
        console.log("Saved!");
      },
      error: function(xhr, status, error) {
        // Handle the AJAX error
        console.error(xhr.responseText);
      }
    });
  });
});
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
