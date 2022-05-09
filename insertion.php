<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>insertion.php</title>
<style>
#hh{text-decoration:none;
     display:compact;
    color:#C03;
}

body{margin:20px;}

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
<?php
$bookid=$_POST['bookid'];
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root'); // making connection object
mysqli_select_db($con,'brm_db'); //selcting database brm_db
$q="insert into book(bookid,title,price,author) 
    values($bookid,'$title',$price,'$author')"; // query to perform on 'book' table of 'brm_db' databse. 
$status=mysqli_query($con,$q);  // execution of query.
mysqli_close($con);  // connection closed
?>
<h4 id="hh">
<?php 
if($status==1) 
   echo "record succesfully inserted"; 
else 
   echo"insertion failed"; 
?>
</h4>
<div id="d">
<h4><i>Do you want to insert more records ?</i></h4>
<table>
<tr>
<td><a href="insertForm.php">Yes</a></td>
<td><a href="home.php"> No</a></td> 
</tr>
</table>
</div>
</body>
</html>
