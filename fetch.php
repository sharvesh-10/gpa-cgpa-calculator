<?php
	header('Content-Type: text/xml');
	include ("db0.php");
	$username=$_REQUEST["name"];
	$password=$_REQUEST["password"];
	$ret = "<XML>";
	$qry = "select username, password from user where username = '".$username."' and password='".$password."'";
	$rst = mysql_query($qry) or die(mysql_error());
	$recs = mysql_num_rows($rst);
	$row=mysql_fetch_array($rst,MYSQL_ASSOC);
	if($recs > 0)
	{
		$ret .= "<RECORD>";
		$ret .= "<NAME>FOUND</NAME>";
		$ret .= "</RECORD>";
	}
	else
	{
		$ret .= "<RECORD>";
		$ret .= "<NAME>UNF</NAME>";
		$ret .= "</RECORD>";
	}
	$ret .= "</XML>";
	echo $ret;
?>
