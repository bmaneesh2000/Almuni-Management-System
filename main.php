<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    footer{
      background-color:black;
      color:white;
      font-style:	Arial;
      height:50px;
      padding:50px;
    }
    .three{
      background-color:SlateBlue;
      padding:30px;
    }

    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
.txt{
  text-align:center;
  padding:10%;
  position:relative;
  font-size:40px;
  font-family:Caesar Dressing;
  color:white;
}
    .man{
      background-color:gold;
      height: 40px;
      padding: 10px;
      font-family: 'Courier New', Courier, monospace;
      font-weight: 900;
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
    .one{
      background-color:red;
      height:400px;
    }
    .two{
      background-color:blue;
      height:410px;
      overflow:auto;
    }
    .txt1{
      text-align:center;
  padding:5%;
  position:relative;
  font-family:Trebuchet MS;
  color:white;
  padding-left: 100px;
    padding-right: 100px;


    }

    </style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="main.php">Home</a>
  <a href="timeline.php">Timeline</a>
  <a href="profile.php">Profile</a>
  <a href="details.php">Enter details</a>
</div>
<nav class="navbar navbar-dark bg-primary">
  <span class="navbar-brand mb-0 h1"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  Navbar</span></span>
</nav>

<div class="man">
  <center><marquee>Welcome <?php
  session_start();  
  echo $_SESSION["name"]?></marquee></center>
</div>
<div class="one">
<div class="txt">
Veltech University<br>
Birthplace of Excellence!!
</div>
</div>

<div class="two">

<div class="txt1"> <h1>INTRODUCTION</h1>
Vel Tech Rangarajan Dr. Sagunthala R&D Institute of Science and Technology, formerly known as Veltech Dr.RR & Dr.SR University. This Institution is commonly referred to as Vel Tech, is an Indian higher education institute located in Avadi, Chennai. Vel Tech offers undergraduate, postgraduate and doctoral programmes in engineering and technology, in addition to a Master of Business Administration and Polytechnic. It consists of four other campuses such as the Multi tech, High tech, VTRS and the arts and science. The college was known for its strict regulations which have been changed along with the years.
Vel Tech was ranked 77 among engineering colleges by the National Institutional Ranking Framework (NIRF) in 2018.
In November 2014 Veltech received Tier I accreditation from the National Board of Accreditation for its aeronautical and mechanical engineering undergraduate programs. In December 2015 the university was accredited with an "A" grade (the highest grade) by the National Assessment and Accreditation Council.

Vel Tech has been recognized as the Best Engineering Institution and ranked as First in India and 74th in the world by Times Higher Education World Young University Ranking 2016-2017

43rd in Asia by Times Higher Education Asia University Ranking 2017</div>
</div>
<div class="three">
<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img src="pic1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"> Top Tier Infrastructure and environment suited for learning.</p>
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img src="1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img src="2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
    </div>
  </div>
</div>
  </div>
<footer>
  <center>Veltech univ for ip project</center>
  </footer>

 

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
