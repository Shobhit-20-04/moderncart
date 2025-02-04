<?php @session_start(); ?>
<html>

<head>
   <link href=".//css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
   <div id="main">
      <div id='header'>
         <div id="leftlogo">
            <a href='index.php'>
               <img src="./images/logo.png" title="Go To Home Page">
            </a>
         </div><!--end of leftlogo-->

         <div id="title">
            <h1>MODERN-CART</h1>
            <h3> One-stop for head to toe look </h3>
            <?php
            if (isset($_SESSION["uname"])) {
               echo ("<div id='userinfo'>");
               echo ("Welcome  " . $_SESSION["uname"] . " , ");
               $usr = $_SESSION["uname"];
               echo ("<a href='logout.php'> Logout </a>");
               if ($_SESSION["utype"] == "user") {

                  $usr = $_SESSION["uname"];
                  include("dbconnect.php");
                  $sql = "select count(*) from cart_info where user_name='$usr'";
                  $rsCart = mysqli_query($con, $sql) or die("Cart Item Count Queery Error");
                  $row = mysqli_fetch_array($rsCart);
                  $cnt = $row[0];
                  echo ("&nbsp&nbsp<a href='displayCartInfo.php'><img src='.//images//logo1.png' width='20' height='20' align='top'>&nbsp<span id='cartcount'>($cnt)</span></a>");
               }

               echo ("</div>");
            }

            ?>
         </div><!--end of title-->

         <div id="rightlogo">
            <img src="./images/images.jpg">
         </div><!--end of leftlogo-->

      </div><!--end of header-->