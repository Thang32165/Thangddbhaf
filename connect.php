<?php
$conn_string="host=ec2-3-222-30-53.compute-1.amazonaws.com port=5432 dbname=d58ub5269mefdn user=wrntyqrssfpsii
password=eec3f59ce96bd0946cac5e6aac5e9e99281b293354fc374ce501f1e376b16587";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM Account WHERE _user='".$username."' AND _pass='".$pass."'";
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
