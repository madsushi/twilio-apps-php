<?php
 header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

//get the source phone number
$callfrom = $_POST['From'];

//who to send the text to
$smsto = "+1805******";

//grabs the digits and formats them nicely for me
$callfromspoken = substr($callfrom, 2, 1) . " " . substr($callfrom, 3, 1) . " " . substr($callfrom, 4, 1) . ",, " . substr($callfrom, 5, 1) . " " . substr($callfrom, 6, 1) . " " . substr($callfrom, 7, 1) . ",, " . substr($callfrom, 8, 1) . " " . substr($callfrom, 9, 1) . " " . substr($callfrom, 10, 1) . " " . substr($callfrom, 11, 1);
$callfromsms = "(" . substr($callfrom, 2, 3) . ") " . substr($callfrom, 5, 3) . "-" . substr($callfrom, 8);

//reads the digits to the person that called, and sends a text to the specified number. This way, I get the phone number I called from texted to my cell phone for documentation
echo '<Response><Sms to="'.$smsto.'">Phone Number: '.$callfromsms.'</Sms><Say loop="2">This is phone number '.$callfromspoken.'</Say></Response>';


?>
