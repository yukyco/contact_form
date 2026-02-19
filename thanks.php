<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>「１日でできる！ＰＨＰプログラミング講座」</title>
</head>

<body>
<?php
	$onamae=$_POST['onamae'];
	$mailaddress=$_POST['mailaddress'];
    $otoiawase=$_POST['otoiawase'];
    
    print $onamae. '様<br>';
    print $mailaddress. 'に確認メールをお送りしました。以下のお問い合わせをありがとうございました。<br>';
    print $otoiawase;
    
    $mail_mes=$onamae."様¥お問い合わせありがとうございました。以下を受け付けました。¥n".$otoiawase;
    $mail_sub='お問い合わせを受け付けました';
    $mail_head='From: youriemailaddress@gmail.com';
    $mail_mes=html_entity_decode($mail_mes,ENT_QUOTES, "UTF-8");
    mb_language('Japanese');
    mb_internal_encoding("UTF-8");
    mb_send_mail($mailaddress,$mail_sub,$mail_mes,$mail_head);

?>
</body>
</html>


