<?php
$a = $_REQUEST["txtHeading"];
$b = $_REQUEST["txtDetail"];
$usr = $_SESSION["uname"];
include("dbconnect.php");
mysqli_query($con, "insert into message_info(msg_heading,msg_detail,sender_name,receiver_name,sent_date) values($a,$b,$usr,now())");
