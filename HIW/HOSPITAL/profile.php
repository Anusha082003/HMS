<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Profile</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <h1 class="navbar-brand" style="padding-left:2%;">HIW | My Profile</h1>
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
            <a class="nav-link active" aria-current="page" href="main.html">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">My Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appointment.php">Book an Appointment</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">Appointment History</a>
          </li>
          
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
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

<form action="#" class="w3-container w3-card-4">
    <div style="padding-left:10%; margin-top:7%;">
<?php
session_start();
include('config.php');

$phone=$_SESSION['phone'];
$sql1 = "select name from login_data where phone = '$phone'";
$query1 = mysqli_query($con,$sql1);
while($name = mysqli_fetch_array($query1))
{
?>
<br><br><label for="name">Name :</label>
 <input type="text" name="name" value="<?php echo $name['name'];?>" disabled>
<?php
}
echo "<br><br>";

$sql3 = "select gender from login_data where phone = '$phone'";
$query3 = mysqli_query($con,$sql3);
while($gender = mysqli_fetch_array($query3))
{
    ?>
    <label for="gender">Gender :</label>
     <input type="text" name="gender" value="<?php echo $gender['gender'];?>" disabled>
    <?php
}
echo "<br><br>";
?>
<label for="phone">Phone Number :</label>
<input type="text" name="phone" value="<?php echo $phone;?>" disabled>
<?php
echo "<br><br>";

$sql2 = "select email from login_data where phone = '$phone'";
$query2 = mysqli_query($con,$sql2);
while($email = mysqli_fetch_array($query2))
{
    ?>
    <label for="email">Email-Id :</label>
    <input type="text" name="email" value="<?php echo $email['email'];?>" disabled>
    <?php
}
echo "<br><br>";

$sql4 = "select address from login_data where phone = '$phone'";
$query4 = mysqli_query($con,$sql4);
while($address = mysqli_fetch_array($query4))
{
    ?>
    <label for="address">Address :</label><br>
    <textarea type="text" name="address" style="width:400px;height: 70px;" disabled><?php echo $address['address'];?> </textarea>
    <?php
}
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";

?>
</div>
</form>

</body>
</html>

