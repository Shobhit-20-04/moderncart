<?php
include("header.php");
?>
<div id="container">
  <div id="leftAdminArea">
    <?php
    include("adminMenu.php");
    ?>
  </div>
  <div id='rightAdminArea'>
    <div id="myForm">
      <?php
      if (isset($_REQUEST['resmsg'])) {
        echo ("<div id='resmessage'>");
        if ($_REQUEST['resmsg'] == 1) {
          echo ("News has been saved");
        } else if ($_REQUEST['resmsg'] == 2) {
          echo ("Invalid Password");
        }

        echo ("</div>");
      }
      ?>
      <form method="get" action="insertNews.php">
        <label>Enter News Heading </label>
        <input type="text" name='txtHeading'>
        <label>Enter News Detail</label>
        <textarea rows='5' name="txtDetail"></textarea>
        <div id='formButtons'>
          <input type="submit" value="Ok" />
          <input type="reset" value="Cancel" />
        </div>
      </form>


    </div><!--end of myForm-->
  </div>
</div><!--end of container-->

<?php
include("footer.php");
?>