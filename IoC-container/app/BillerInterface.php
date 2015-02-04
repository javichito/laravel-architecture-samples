<?php

interface BillerInterface {

  /**
  *  Bill a user
  *
  *  @param $user
  *  @param $amount
  *  @return boolean
  */
  public function bill(stdClass $user, $amount);

}
