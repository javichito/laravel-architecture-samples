<?php

class SMSNotifier implements NotifierInterface {

  public function notify(stdClass $user, $message)
  {
    $result  = "Sending SMS...\n";
    $result .= "I will notify the user with the following message:\n{$message}\n";

    // Send the SMS
    echo $result;

    return $result;
  }

}
