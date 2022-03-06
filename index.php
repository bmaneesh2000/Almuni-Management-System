<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <p>Username</p>
            <input type="text" name="n" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="p" placeholder="Enter Password">
            <input type="submit" name="" value="Login">
            <a href="signin.php">Don't have an account?</a>
        </form>
        
    </div>
    <?php 
    $name = $_POST['n'];
    $pass = $_POST['p'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($servername, $username, $password,'alumuni');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
                }
    $sql = "SELECT * from alumuni WHERE Name='$name' AND Password='$pass'" ;
    $result=mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    if($row==1){
        $login=true;
        session_start();
        $_SESSION["loggedin"]=true;
        $_SESSION["name"]=$name;
        header("location:main.php");
    }
    else{
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('invalid username or password');";
        echo "</script>"; 
    }

      
      mysqli_close($conn);
    ?>

</body>
</head>
</html>