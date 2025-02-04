<?php
include("header.php");
?>
<div id="container">
    <div id="newsinfo">
    <table border='1' align="center" width="80%" style="color:white">
        <tr>
            <th width="100px">Sl. No.</th>
            <th>News Heading</th>
        </tr>
        <?php
        include("dbconnect.php");
        $rsNews=mysqli_query($con,"select news_id,news_heading from news_info where del_status=0 order by reg_date desc");
        $cnt=0;
        while($row=mysqli_fetch_array($rsNews))
        {
            $cnt++;
            $id=$row["news_id"];
            $hd=$row["news_heading"];
            echo("<tr>");
            echo("<td align='center'>");
            echo($cnt);
            echo("</td>");
            echo("<td>");
            echo("<a href='displayNewsDetail.php?nid=$id'>");
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