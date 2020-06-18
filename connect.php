<?php
$conn_string="host=ec2-52-20-248-222.compute-1.amazonaws.com port=5432 dbname=dempdn7uu57aq9 user=xrqyopedfidgdw password=7873024f9ea8478508064813fe5c4ea4a7dd48932abaf99a4174c86162d6b4d8";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM Account1 WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>