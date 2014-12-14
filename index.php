<?php
mysql_connect("localhost","root","takming");
mysql_select_db("mysql");
$result=mysql_query("select * from db");
while($rowdate=mysql_fetch_array($result))
{
echo $rowdate[Host];
}
?>