<?
include_once("./_common.php");
$newpost = $_GET;
$newpost[mb_id] = "admin";
$newpost[bo_table] = "qa";
$newpost[wr_name] = $_GET[name1]." ".$_GET[name2];
$result = insert_write($newpost);


//받는 이
  $recipient = "dlee@hgpworld.com, nmr@designvii.com, miranam7@gmail.com ";
//제목 처리
  $subject = '=?UTF-8?B?'.base64_encode($_GET['wr_subject']).'?=';
//메일주소
  $mail_from = 'contact@hgpworld.com';

//메일내용
  $mail_body = 	  "<p>This is email to check the inquiries on the HGP website.</p><br>
<table width='600' border='0' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
        <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>Name</td>
          <td width='400' bgcolor='#FFFFFF' style=\"padding-left:10px\">". $_GET['name1']." ". $_GET['name2']."</td></tr>".		
		  
       " <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>Phone</td>
          <td width='400' bgcolor='#FFFFFF'style=\"padding-left:10px\">". $_GET['wr_1']."</td></tr>".	
		  
       " <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>Email</td>
          <td width='400' bgcolor='#FFFFFF'style=\"padding-left:10px\">". $_GET['wr_email']."</td></tr>".	
 
       " <tr> 
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>Message</td>
          <td width='400' bgcolor='#FFFFFF'style=\"padding-left:10px\">". $_GET['wr_content']."</td></tr>".	
		  
      "</table>";

 
//메일 발송처리

  $header = "From:$subject\n";
  $header = "Content-Type: text/html;charset=UTF-8";
  $header .= "From : $mail_from <".$mail_from.">\n"; 

 
  $email = mail($recipient, $subject, $mail_body, $header);



  if (!$email)
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <script>
         window.alert('The mail has failed to be sent.');
         </script>";
  else
    echo "         <script>
         window.alert('Your message has been sent successfully.');
         history.go(-1);
         </script>";
?>

