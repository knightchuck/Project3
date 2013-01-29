<?php
cscript /nologo configure.js "--enable-snapshot-build" "--disable-isapi" "--enable-debug-pack" "--disable-isapi" "--without-mssql" "--without-pdo-mssql" "--without-pi3web" "--with-pdo-oci=D:\php-sdk\oracle\instantclient10\sdk,shared" "--with-oci8=D:\php-sdk\oracle\instantclient10\sdk,shared" "--with-oci8-11g=D:\php-sdk\oracle\instantclient11\sdk,shared" "--enable-object-out-dir=../obj/" "--enable-com-dotnet" "--with-mcrypt=static"
$con = mysql_pconnect("instance37610.db.xeround.com:5724","cbxeround","knightround");
  if (!$con)
    die('Could not connect: ' . mysql_error());
  mysql_select_db("trumpetshop");

  // rest of the code . . .
?>