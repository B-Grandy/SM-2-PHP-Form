<!doctype html>
<pre><?php
  //var_dump($_POST);
?></pre>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Week 3 Lab</title>

    <style>
      body, html {
      height: 100%;
      width: 100%;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      color: #ffffff;
    }

    * {
      box-sizing: border-box;
    }
    .background-img {
      background-image: url("roblox_.jpg");
      min-height:100%;
      min-width: 1024px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position:static;
    }
    .container{
      border-style:solid;
      width:fit-content;
      padding: 20px;
      background-color: white;
      color:#000000;
      position: absolute;
      top: 35%;
      left: 38%;
      text-align: center;
    }
    .btn {
      background-color: #04AA6D;
      color: #ffffff;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
    .btn:hover {
      opacity: 1;
    }
    </style>
  </head>
  <body>
  
    <div class="background-img">
      <form class="container">
         <?php 
         echo "<b> THANK YOU! </b>";
         echo "<br/><br/>";
         echo $_POST["fname"] ." ". $_POST["lname"];
         echo "<br/><br/>";
         echo "<b> Your average play time a day is:  </b>" . "<br/><br/>" . $_POST["hours-play"] . ":00hrs";
         echo "<br/><br/>";
         echo "<b> Your level of enjoyment is: </b>" . "<br/><br/>" . "***" . $_POST["experience"] . "***";
         echo "<br/><br/>";
         echo "<b> We hope you continue to enjoy your experience!" . "<br/>" . "Have a wonderful day! <b/>"
         ?> 
    </form>
  </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>