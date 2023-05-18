
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
  <div class="row">
    <div class="col-md-2 col-lg-2 col-xl-2 sidebar">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Population</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Person'S Data</a>
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
      <h1>Welcome, <?php echo $_SESSION['email'] . "!"; ?><br> Purok Monitoring Management System by M4rk</h1>
      <p>A must needed web-base monitoring management system for every residence.</p>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
