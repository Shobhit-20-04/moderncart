<html>
    <script>
        function LoadStudent() {

var cid = document.getElementsByName("cmbCourse")[0].value;
var xml = new XMLHttpRequest();
xml.onreadystatechange = function () {
    if (xml.readyState == 4 && xml.status == 200) {

        document.getElementById("mydiv").innerHTML = xml.responseText;
    }
}
xml.open("GET", "CheckCourse.php?cid=" + cid, true);
xml.send();
}
    </script>
    <body>
        <?php

    echo ("<h1>Student Course Information</h1>");

    $con = mysqli_connect("127.0.0.1", "root", "") or die("database connection error");
    mysqli_select_db($con, "modern_cart") or die("database selection error");

    $sql = "select * from course_info";
    $result = mysqli_query($con, $sql) or die("query Error");

    echo ("<select name='cmbCourse' id='cmbCourse' onchange='LoadStudent();'>");
    while ($row = mysqli_fetch_array($result)) {

        $cid = $row["course_id"];
        echo ("<option  value='$cid'>");
        echo ($row["course_name"]);
        echo ("</option>");
    }
    echo ("</select> ");
    echo ("<input type='button' value='Ok'>");
    ?>
    <div id="mydiv">
   <select name="" id=""></select>
    </div
    </body>
</html>