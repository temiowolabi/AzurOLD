<!DOCTYPE html>
<html lang="en">

<head>


  <title>Home</title>
</head>
<body>
<?php 
include("path.php");
include(ROOT_PATH . "/includes/header.php"); ?>

  <!-- login form *start* -->
<form action="index.php" method="post" class="loginForm" autocomplete="off">

  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Login</h2>
    <h3 class="fs-subtitle">Welcome Back!</h3>
    <input type="text" name="email" placeholder="Email" autocomplete="off" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="button" name="submit" class="submit action-button" value="Submit" />
  </fieldset>

</form>
  <!-- login form *end* -->
    
</body>