<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="viewStyle.css" />
<title>view.php</title>
</head>

<body>
<h2>Book Record Management</h2>
<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<h3>Following are the records stored in the database.</h3>
<table>
<tr>
<th>Bookid</th>
<th>Title</th>
<th>Price</th>
<th>Author</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++){
	$row=mysqli_fetch_array($result);
?>
<tr>
<td> <?php echo $row['bookid']; ?></td>
<td> <?php echo $row['title']; ?></td>
<td> <?php echo $row['price']; ?></td>
<td> <?php echo $row['author']; ?></td>
</tr>
<?php 
}
?>
</table>
<h4>Go back to home page <a href="home.php">Home page</a></h4>
</body>
</html>