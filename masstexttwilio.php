<?php
    
    //requires the official Twilio PHP plugin
    require "plugin/Services/Twilio.php";
    
    //substitute these with your SID/token
    $AccountSid = "******";
    $AuthToken = "*******";
    
    $client = new Services_Twilio($AccountSid, $AuthToken);
    
    //these are the custom passwords set from the first page
    $morypassword = "******";
    $testpassword = "******";
    $chasepassword = "******";
    //$enteredpassword = $_POST['password'];

    //the "fromNumber" is your twilio source number
    //you have to enumerate all of your guild members here
    $fromNumber = "805-***-****";
    $regularNumber = "+1805*******";
    $internationalNumber = "+44798*******";
    //$txtbody = $_POST['txtbody'];
    
    
function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }

    //check password
if ($enteredpassword == $morypassword || $enteredpassword == $chasepassword || $enteredpassword == $testpassword){
    
    //if the user is checked, send them the text. must copy this code block for all checked users
    if(IsChecked('txtTo','regular')){
      $smsScott = $client->account->sms_messages->create(
      $fromNumber,
      $regularNumber,
      $txtbody
      );
    }
    
    
    if(IsChecked('txtTo','international')){
      $smsMory = $client->account->sms_messages->create(
      $fromNumber,
      $internationalNumber,
      $txtbody
      );
    }

echo "All done!";
}else{
echo "Wrong password!!!";

}
?>
