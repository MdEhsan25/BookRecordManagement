<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>updation.php</title>
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
<h3><u>updation.php</u></h3>
<?php 
$records=sizeof($_POST);
$size=$records/4; 

for($i=1;$i<=$size;$i++){
$index1="bookid".$i;
$bookid[$i]=$_POST[$index1];

$index2="title".$i;
$title[$i]=$_POST[$index2];

$index3="price".$i;
$price[$i]=$_POST[$index3];

$index4="author".$i;
$author[$i]=$_POST[$index4];
}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');

for($i=1;$i<=$size;$i++){
	$q="update book SET title='$title[$i]',price=$price[$i],author='$author[$i]' 
	     where bookid=$bookid[$i] ";
	$up=mysqli_query($con,$q);
	}

mysqli_close($con);

?>
<p><?php echo $records." records updated"; ?></p>
<br />
<div id="d">
<i><h4>Do you want to update more records?</h4></i>
<table>
<tr>
<td><a href="updateForm.php">Yes</a></td>
<td><a href="home.php"> No</a></td>
</table>
</div>

</body>
</html>