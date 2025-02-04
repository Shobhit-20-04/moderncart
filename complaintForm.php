<?php 
  include("header.php");
?>
<div id="container"> 
<div id='adminArea'>
<div id='leftAdminArea'>
 <?php 
   include("userMenu.php");
 ?>
</div><!--end of leftAdminArea-->

<div id='rightAdminArea'>

<div id="myForm">
  <?php 
   if(isset($_REQUEST['resmsg']))
   {
     echo("<div id='resmessage'>");
      if($_REQUEST['resmsg']==1)
      {
        echo("News has been saved");
      }
      else if($_REQUEST['resmsg']==2)
      {
        echo("Invalid Password");
      }
     
     echo("</div>");
   }
  ?>
<form method="get" action="insertComplaint.php">
<label>Complaint Heading </label>
<input type="text" name='txtHeading'>
<label>Complaint Detail</label>
<textarea rows='5' name="txtDetail" ></textarea>
<div id='formButtons'>
<input type="submit" value="Ok" />
<input type="reset" value="Cancel" />
</div>
</form>


</div><!--end of myForm-->
</div><!--end of rightAdminArea-->
</div><!--end of adminArea-->
</div><!--end of container--> 
<?php 
  include("footer.php");
?>