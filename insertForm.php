<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>insertForm.php</title>
<style>
table{border:15px groove #C06;
	  background-color:#9CF;
      height:270px;
	  width:400px;
	   }
a{display:compact; text-decoration:blink;}
</style>
</head>

<body>
<h2>Book Record Management</h2>
<h4><u>Insertion Form</u></h4>
<form action="insertion.php" method="post">
<table>
<tr>
<td colspan="2"><i><b>Enter the book records in the specific feilds.</b></i></td>
</tr>
<tr>
<th>Bookid</th>
<td><input type="number" name="bookid" required="required" /></td>
</tr>
<tr>
<th>Title</th>
<td><input type="text" name="title" required="required" /></td>
</tr>
<tr>
<th>Price</th>
<td><input type="number" name="price" required="required" /></td>
</tr>
<tr>
<th>author</th>
<td><input type="text" name="author" required="required"/></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="insert" /></td>
</tr>
</table>
</form>

<h4><i>Go back to home page </i><a href="home.php">Home page</a></h4>

</body>
</html>
