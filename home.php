<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
table{border:10px groove #06F;
      height:230px;
	  width:350px;
	  background-color:#F09;
	  text-align:center; }
th{margin:5px;
   background-color:#F60; 
   }
td{ margin:5px; 
    background-color:#9FF;} 
	
a{ text-decoration:none; 
   font-style:oblique;}
    
.a{ background-color:#FCF; 
    display:block;
	border-radius:5px;
	}
.a:hover{background-color:#6FF;}	    
</style>
</head>

<body>
<h2>Book Record Management</h2>
<h3>home.php</h3>
<p>Here we can manage the records of the book by the following <b>links</b></p>
<table>
<tr>
<th>Sl.No.</th>
<th>Objectives</th>
<th>Links</th>
</tr>
<tr>
<td>1</td>
<td>Inserting data</td>
<td class="a"><a href="insertForm.php">insert</a></td>
</tr> 
<tr>
<td>2</td>
<td>View data</td>
<td class="a"><a href="view.php">view</a></td>
</tr>
<tr>
<td>3</td>
<td>Deleting data</td>
<td class="a"><a href="deleteForm.php">delete</a></td>
</tr>
<tr>
<td>4</td>
<td>Updating data</td>
<td class="a"><a href="updateForm.php">update</a></td>
</tr>
</table><br />
<br />

<marquee bgcolor="#66FFFF">Choose the option to manage the book records.</marquee>
</body>
</html>