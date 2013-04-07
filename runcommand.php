<?php
 header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

$smsbody = $_POST['Body'];
$smsfrom = $_POST['From'];

//make sure the call is from me
if ($smsfrom == "+1805********"){
  if ($smsbody == "test" || $smsbody == "Test"){
	echo "<Response><Sms>Test completed.</Sms></Response>";
  }else{
    //If I send a text, execute this command on my server.
    exec("sudo $smsbody");
    echo "<Response><Sms>Executed, sir.</Sms></Response>";
  }
}elseif ($smsbody == "test" || $smsbody == "Test"){
    //echo test to see if text messages are working
    echo "<Response><Sms>Test completed.</Sms></Response>";
}else{
    //remind this person they are not authorized
    echo "<Response><Sms>Not authorized.</Sms></Response>";
}
?>
