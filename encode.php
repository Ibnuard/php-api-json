<?php
 
 include'config.php';
 
 $query = mysqli_query($connection, 'select * from user');
 
$arr = array();
while ($row = mysql_fetch_assoc($query)) {
    $temp = array(
  "id" => $row["id"],
    "username" => $row["username"],
    "password" => $row["password"], 
    "level" => $row["level"], 
    "fullname" => $row["fullname"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"list_event\":" . $data . "}";
?>