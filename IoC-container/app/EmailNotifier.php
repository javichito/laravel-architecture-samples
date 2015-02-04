<?php

class EmailNotifier implements NotifierInterface {

  public function notify(stdClass $user, $message)
  {
    $result  = "Sending email...\n";
    $result .= "I will notify the user with the following message:\n{$message}\n";

    // Send the email
    echo $result;

    return $result;
  }

}
