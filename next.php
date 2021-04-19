<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>「3時間で完成させる！PHPプログラム」</title>
</head>

<body>

<?php 
     $onamae = $_POST['onamae'];
	 $mailaddress = $_POST['mailaddress'];
	 $mailaddress2 = $_POST['mailaddress2'];
	 $otoiawase = $_POST['otoiawase'];

     $otoiawase=htmlspecialchars($otoiawase, ENT_QUOTES);
     
     $err=0;
     
     if($onamae=='')
     {
	     print 'お名前が入力されていません。<br><br>';
	     $err=1;
     }
     else
     {
	 		 print 'お名前<br>';
	 		 print $onamae;
     		 print '<br><br>';
	  }
	  
	  if($mailaddress=='')
     {
	     print 'メールアドレスが入力されていません。<br><br>';
	     $err=1;
     }
     else
     {
	 		 print 'メールアドレス<br>';
	 		 print $mailaddress;
     		 print '<br><br>';
	  }
	  
	  if($mailaddress2=='')
     {
	     print 'メールアドレスがが入力されていません。<br><br>';
	     $err=1;
     }
     else
     {
	 		 print 'メールアドレス<br>';
	 		 print $mailaddress2;
     		 print '<br><br>';
	  }
	  
	  if($otoiawase=='')
     {
	     print 'お問い合わせ内容が入力されていません。<br><br>';
	     $err=1;
     }
     else
     {
	 		 print 'お問い合わせ内容<br>';
	 		 print nl2br($otoiawase);
     		 print '<br><br>';
	  }
	
	  if($err==1)
	  {
		  print '<form>';
		  print '<input type="button" value="戻る" onclick="history.back()" style="width:100">';
		  print '</form>';
	  }

      else
      {
	     print '<form method="post" action="thanks.php">';
	     print '<input type="hidden" name="onamae" value="'.$onamae.'">';
	     print '<input type="hidden" name="mailaddress" value="'.$mailaddress.'">';
	     print '<input type="hidden" name="otoiawase" value="'.$otoiawase.'">';
		   print '<input type="button" value="戻る" onclick="history.back()" style="width:100">';
		   print '<input type="submit" valuse="OK" style="width:100">';
		   print '</form>';
      }
  ?>

</body>
</html>
