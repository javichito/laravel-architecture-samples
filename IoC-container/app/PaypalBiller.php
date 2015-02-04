<?php

class PaypalBiller implements BillerInterface {

  protected $notifier;

  public function __construct(NotifierInterface $notifier)
  {
    $this->notifier = $notifier;
  }

  public function bill(stdClass $user, $amount)
  {
    // Do billing stuff

    $this->notifier->notify($user, "I will bill \${$amount} this user with Paypal.");

    return true;
  }

}
