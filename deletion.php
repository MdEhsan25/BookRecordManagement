<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>deletion.php</title>
<style>
table{margin:30px;
      background-color:#039;
	  height:50px;
	  width:150px;
}

td{
   text-align:center;
   background-color:#CFF;
   padding:10px;
   
}
 
a{text-decoration:none;
  display:block;} 

#d{height:160px;
  width:280px;
  padding:5px;
  text-align:center;
  border:20px groove #60C;
}

</style>
</head>

<body>
<h2>Book Record Management</h2>
<h3>deletion.php</h3>
<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++){
	$index="b".$j;
	if(isset($_POST[$index]))
	   $b_id[$i]=$_POST[$index];
	else
	   $i--;
	}	

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
for($k=1;$k<=$size;$k++){
$q="delete from book where bookid=".$b_id[$k];
$del=mysqli_query($con,$q);
   }
if($q) 
   echo $size." <h4>record deleted</h4>";
else
   echo "<h4>deletion failed</h4>";
mysqli_close($con);

?>
<br />

<div id="d">
<h4>Do you want to delete more records? </h4>
<table>
<tr>
<td><a href="deleteForm.php">Yes</a></td>
<td><a href="home.php">No</a></td>
</tr>
</table>
</div>

</body>
</html>

