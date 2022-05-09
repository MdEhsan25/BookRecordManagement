<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>updateForm.php</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css" />
</head>

<body>
<h2>Book Record Management</h2>
<h3><u>updateForm.php</u></h3>

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<form action="updation.php" method="post">
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
     <td><?php echo $row['bookid']; ?>
          <input type="hidden" name="bookid<?php echo $i; ?>"
	      value="<?php echo $row['bookid']; ?>" /></td>
     <td><input type="text" name="title<?php echo $i; ?>" 
          value="<?php echo $row['title']; ?>" /> </td>
     <td><input type="number" name="price<?php echo $i; ?>" 
	      value="<?php echo $row['price']; ?>" /> </td>
     <td><input type="text" name="author<?php echo $i; ?>" 
	      value="<?php echo $row['author']; ?>" /></td>
 </tr>
<?php 
}
?>
 <tr>
     <td><input type="submit" value="update" /></td>
 </tr>
</table>
</form>
<h4><i>Go back to home page </i><a href="home.php">Home page</a></h4>

</body>
</html>