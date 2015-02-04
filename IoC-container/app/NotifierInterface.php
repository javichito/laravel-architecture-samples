<?php

interface NotifierInterface {

  /**
  *  Notifies a user
  *
  *  @param $user
  *  @param $message
  *  @return string
  */
  public function notify(stdClass $user, $message);

}
