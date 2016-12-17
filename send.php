<?php

	include 'class.smpp.php';

        $src  = "phone_number"; // or text
        $dst  = "phone_number";
        $message = "Test Message";
        $host = "smpp_host"; // ip or domain
        $port = "port"; // must be integer

        $smpp_user = "username";
        $smpp_pass = "password";
        $system_type = "";

	$s = new smpp();
	$s->debug=1;

	// $host,$port,$system_id,$password,$system_type
	$s->open($host, $port, $smpp_user, $smpp_pass,$system_type);

	// $source_addr,$destintation_addr,$short_message,$utf=0,$flash=0
	// $s->send_long($src, $dst, $message);
	$s->submit_sm($src, $dst, $message);
	//$s->deliver_sm($dst, $src, $message);

	/* To send unicode 
	$utf = true;
	$message = iconv('Windows-1256','UTF-16BE',$message);
	$s->send_long($src, $dst, $message, $utf);
	*/

	$s->close();
?>
