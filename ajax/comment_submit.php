<?php
header('Content-type: text/plain');
include('../mysql_connect.php');
$ip = checkInput($_SERVER['REMOTE_ADDR'],'IP');
echo $ip;

$name = checkInput($_POST['name'], 'Name');
$comment = checkInput($_POST['comment'], 'Comment');
$time =date();

$sql = "INSERT INTO `comments`(name,ip,comments,time) VALUE($name,$ip,$comment,now());";
if (mysql_query($sql)) {
    echo 'success';
} else {
    exit('Mysql insert failed');
}
 
function checkInput($value, $require = null) {
    if (empty($value) && !is_null($require)) {
        exit($require . " is required");
    }
    if (get_magic_quotes_gpc()) {
        $value = stripslashes($value);
    }
    if (!is_numeric($value)) {
        $value = " '" . mysql_real_escape_string($value) . "'";
    }
    return $value;
}
?>