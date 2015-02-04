<?php

class UserController {

  protected $biller;

  public function __construct(BillerInterface $biller)
  {
    $this->biller = $biller;
  }

  public function billAction()
  {
    $amount = 100;
    $user = new stdClass();

    $this->biller->bill($user, $amount);
  }

}
