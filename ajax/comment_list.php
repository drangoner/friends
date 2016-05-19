<?php
header('Content-type: application/json');
include('../mysql_connect.php');
$sql = 'SELECT * FROM `comments`;';
 
$commentsData = mysql_query($sql);
while($row = mysql_fetch_array($commentsData)) {
    $comments[] = $row;
}
echo json_encode($comments);
?>