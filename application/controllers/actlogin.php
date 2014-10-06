<?php
	include "connection.php";
	$mdpassword = md5($_POST['password']);
	$result = mysql_query("SELECT count(*) AS TOTAL from users WHERE username='$_POST[username]' AND password='$mdpassword'");
	$count = mysql_fetch_array($result);

	if($count['TOTAL']==0 || ($_POST['username']=="" && $_POST['password']==""))
	{
		echo $count;
		header("Location:login.php?status=false");
	}
	else
	{
		$result1 = mysql_query("SELECT * from users WHERE username='$_POST[username]' AND password='$mdpassword'");
		session_start();
		while ($rows = mysql_fetch_array($result1))
		{
			$_SESSION['username'] = $rows['username'];
			$_SESSION['password'] = $rows['password'];
			$_SESSION['timeout'] = time();
		}
		echo $_SESSION['username'];
		header("Location:index.php");
	}
?>