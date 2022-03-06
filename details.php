<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
<body>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <br>
    <div class="loginbox">
      <br>
      <br>
        <h1>Enter details here <?php session_start();echo $_SESSION["name"]; ?></h1>
        <form method="post" action="<?php echo "  ".$_SERVER['PHP_SELF'];?>">
            <p>Enter E-Mail</p>
            <input type="text"  placeholder="Enter E-mail" name="Email">
            <p>Enter Registration number</p>
            <input type="text"  placeholder="Enter Reg number" name="Rgno">
            <p>Enter Phone number</p>
            <input type="text"  placeholder="Enter Phone number" name="ph">
            <p>Enter year of registration</p>
            <input type="text" placeholder="Enter year of registration" name="y1">
            <p>Enter year of passout</p>
            <input type="text" placeholder="Enter year of passout" name="y2">
            <p>Current Occupation</p>
            <input type="text" placeholder="Current occupation" name="co">
            <input type="submit" value="Submit">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_SESSION["name"];
            $rgno = $_POST['Rgno'];
            $email = $_POST['Email'];
            $ph= $_POST['ph'];
            $y1= $_POST['y1'];
            $y2= $_POST['y2'];
            $co= $_POST['co'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password,'alumuni');
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                        }
            $sql = "INSERT INTO `student`(`name`, `rgno`, `email`, `ph`, `y1`, `y2`, `co`) VALUES ('$name','$rgno','$email','$ph','$y1','$y2','$co')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                header("location:profile.php");
              } else {
                echo "<script language='javascript' type='text/javascript'>";
                echo "alert('Error enter all values and proceed');";
                echo "</script>"; 
              }
              
              mysqli_close($conn);
            }
           
            
              ?>
              

        </form>
        
    </div>
  
</body>
</head>
</html>