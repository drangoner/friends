<?php 
@ mysql_connect('127.0.0.1:3306' , 'root' , 'James' )
 or die("mysql 连接失败");
@ mysql_select_db("friends") or die("db 连接失败");
mysql_set_charset("utf8");
 ?>