<?php
include("header.php");
?>
<div id="container">
    <div id="newsinfo">
    <table border='1' align="center" width="80%" style="color:white">
        <tr>
            <th width="100px">Sl. No.</th>
            <th>News Detail</th>
        </tr>
        <?php
        $x=$_REQUEST["nid"];
        include("dbconnect.php");
        $rsNews=mysqli_query($con,"select news_detail from news_info where news_id=$x");
        $cnt=0;
        while($row=mysqli_fetch_array($rsNews))
        {
            $cnt++;
            $hd=$row["news_detail"];
            echo("<tr>");
            echo("<td align='center'>");
            echo($cnt);
            echo("</td>");
            echo("<td>");
            echo($hd);
            echo("</a>");
            echo("</td>");
            echo("</tr>");
        }
        ?>
    </table>
    </div>
</div>
<?php
include("footer.php");
?>