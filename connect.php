<?php
mysql_connect("localhost", "root", " ") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("trumpetshop") or die(mysql_error());
echo "Connected to Database";
?>