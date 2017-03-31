<?php
//connect to server
$hostname = "localhost";
$username = "root";
$password = "";
$db = "Pinar Machinery";
$con = mysql_connect($hostname,$username,$password,$db);
if($con){
echo "connected successfully";
}else{
echo "connection failed";
}
/*//insert data
$insertOp = mysql_query("INSERT INTO pinarsite(name of columns) VALUES()");
if($insertOp){
echo "Inserted successfully";
}else{
echo "insert failed";
}
//update data
$updateOp = mysql_query("UPDATE pinarsite SET column = '' WHERE column = ''");
if($updateOp){
echo "Updated successfully";
}else{
echo "update failed";
}
//delete data
$deleteOp = mysql_query("DELETE FROM pinarsite WHERE column = VALUE");
if($deleteOp){
echo "deleted successfully";
}else{
echo "delete failed";
}
//select data
$selectOp = mysql_query("SELECT * FROM pinarsite");
$data = array("item 1","item n"
$number = count ($data
echo $number
for($i = 0, $i <number, $i++
echo $data [$i]."<br>"
$i++;)*/
if($insertOp){
echo "Inserted successfully";
}else{
echo "insert failed";
}
?>
