<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
      header{
          background-color:DodgerBlue;
          padding:5px;
      }
.maha{
    background-color:SlateBlue;
    width:700px;
    height:500px;
    down:5px;
    margin: auto;
    
}

    body {
      font-family: "Lato", sans-serif;
      
     
    }
    
    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }
    
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }
    
    .sidenav a:hover {
      color: #f1f1f1;
    }
    
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    
    #main {
      transition: margin-left .5s;
      padding: 16px;
    }
    
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    .formc{
        background-color:green;
    }
    .title{
        font-size:40px;
        text-align:center;
        padding-top:15px;
        color:white;
    }

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body class="bg-secondary">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="main.php">Home</a>
  <a href="timeline.php">Timeline</a>
  <a href="profile.php">Profile</a>
  <a href="details.php">Enter details</a>

</div>
<header>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</header><br>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'alumuni');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
            }
            session_start();
            $name=$_SESSION["name"];
            $sql="SELECT * FROM `student` WHERE name='$name'";
            $result=mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                $rgno=$row["rgno"];
                $email=$row["email"];
                $ph=$row["ph"];
                $y1=$row["y1"];
                $y2=$row["y2"];
                $co=$row["co"];
              }
            }
            else{
              header("location:details.php");
            }
            ?>

<div class="maha">
    <div class="title bg-danger"><u>PROFILE</u></div>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>Name</td>
      <td><?php echo $name; ?></td>

    </tr>
    <tr>

      <td>Email</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
    <td>Phone number</td>
<td><?php echo $ph; ?></td>
</tr>
    <tr>

      <td>Registration number</td>
      <td><?php echo $rgno; ?></td>
    </tr>
    <tr>

<td>Year of joining</td>
<td><?php echo $y1; ?></td>
</tr>
<td>Year of passing out</td>
<td><?php echo $y2; ?></td>
</tr>
<td>Currently working at</td>
<td><?php echo $co; ?></td>
</tr>

  </tbody>
</table>
</div>
</div>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>
    </body>
    </html>