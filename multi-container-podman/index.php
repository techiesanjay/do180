<?php
   $dbhost = '10.88.0.3';
   $dbuser = 'root';
   $dbpass = 'rootpass';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM Courses';
   mysql_select_db('items');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="report.css">
</head>
<body>

 <table style="width:100%" id="customers">
  <tr>
    <th>ID</th>
    <th>Course</th>
    <th>Code</th>
  </tr>
   <?php
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "<tr>\n";
      echo "<td>{$row['id']}</td>\n";
      echo "<td>{$row['name']}</td>\n";
      echo "<td>{$row['code']}</td>\n";
      echo "</tr>\n";
   }
   ?>
 </table>
  
<?php 
echo "Fetched data successfully\n";
mysql_close($conn);
?>
</body>
</html>
