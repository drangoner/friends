<?php 
@ mysql_connect(SAE_MYSQL_HOST_M .':'. SAE_MYSQL_PORT , SAE_MYSQL_USER , SAE_MYSQL_PASS )
 or die("mysql 连接失败");
@ mysql_select_db("app_whiterose") or die("db 连接失败");
mysql_set_charset("utf8");
 ?>