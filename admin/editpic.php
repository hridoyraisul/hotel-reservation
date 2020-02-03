<?php

$_SESSION['USERID']=$_GET['USERID'];
$mydb->setQuery("SELECT * FROM tbluseraccount where USERID=".$_SESSION['USERID']); 
$cur = $mydb->loadSingleResult();

?>
<div class="panel panel-primary">
	<div class="panel-body">
		<form class="form-horizontal well span6" action="controller.php?action=editimage" enctype="multipart/form-data" method="POST">
		<table class="table table-hover" border="0" width="50">
			<caption><h3 align="left">Modify Image</h3></caption>
		<tr>
		<td width="80">
			<input name="id" type="hidden" value="<?php echo $_SESSION['USERID']; ?>">
			<div><img src="<?php echo $_SESSION['UPIC'];?>"width="250" height="250" alt="" style="border-radius: 200%;
    background: #1ec3db;
    padding: 4px; 
    width: 300px;
    height: 260px;" 
		</tr>

		<tr>
		<td width="80">
			<input id="image" name="image" type="file"></td>
		</tr>
		<tr>
		<td width="80"><input type="button" value="&laquo Back" class="btn btn-primary" onclick="window.location.href='index.php'" >  
		 <button class="btn btn-primary" name="save" type="submit" >Save</button>

		</td>
		</tr>
	
		</table>
	</form>
	
	 </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
