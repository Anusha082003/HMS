<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
{
$name = $_POST['name'];  
$password = $_POST['password']; 



  
$sql = "select * from admin_doctors_data where name = '$name' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  
    
if($count > 0)
{  
    $_SESSION['name']=$name;
    header("location: doctor_main.html");
}  
else
{  

    echo "<h3> Login failed. Invalid username or password.</h3>";  
    echo "<a href='doctor_login.php'>Try again</a>";
}  
}   

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <h1 class="navbar-brand" style="padding-left:2%;">HIW | Doctor Login</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">HIW</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                
                
                      <hr class="dropdown-divider">
                    </li>
                    
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
          </div>
        </div>
      </nav>
    <form action="#" method="post" class="w3-container w3-card-4 w3-light-grey" style="padding-left:3%; margin-left:23%; margin-right:30%; margin-top:15%; margin-bottom:1%;">
        <br><br><br><label for="name" class="form-label" style="padding-left:60px;">Doctor: </label>
        <input type="text" name="name" id="name" size="50" placeholder="Enter your Name" required><br><br>
        <label for="password" style="padding-left:60px;">Password: </label>
        <input type="password" name="password" id="password" size="50" placeholder="Enter your Password" required><br><br>
        <input type="submit" style="width:15%;margin-left:255px;" name="submit" value="Login"><br><br><br>
        
    </form>
</body>
</html>