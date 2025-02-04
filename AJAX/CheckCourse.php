<?php
$cid = $_REQUEST["cid"];

$con = mysqli_connect("127.0.0.1", "root", "") or die("database connection error");
mysqli_select_db($con, "modern_cart") or die("database selection error");

$sql = "select * from student_info where course_id='$cid'";
$result = mysqli_query($con, $sql) or die("Querry Eror");

echo ("<select name='cmbStudentInfo' id='cmbStudentInfo'>");

while ($row = mysqli_fetch_array($result)) {

    echo ("<option>");
    echo ($row["sname"]);
    echo ("</option>");

}
echo ("</select");

?>