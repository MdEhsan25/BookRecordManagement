<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>deleteForm.php</title>
<link rel="stylesheet" type="text/css" href="viewStyle.css" />
</head>

<body>
<h2>Book Record Management</h2>
<h3>deleteForm.php</h3>

</body>
</html>

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

?>

<form action="deletion.php" method="post">
<table>
  <tr>
      <th>Bookid</th>
      <th>Title</th>
      <th>Price</th>
      <th>Author</th>
      <th>Select to delete</th>
  </tr>
<?php 
for($i=1;$i<=$num;$i++){
	$row=mysqli_fetch_array($result);
?>
  <tr>
      <td><?php echo $row['bookid']; ?></td>
      <td><?php echo $row['title'];?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['author'];?></td>
      <td><input type="checkbox" name="b<?php echo $i;?>" value="<?php echo $row['bookid']; ?>" /></td>
  </tr>
<?php 
}
?>
<tr>
     <td><input type="submit" value="delete" /></td>
</tr>
</table>
<h4>Go back to home page <a href="home.php">Home page</a></h4>
</form>