<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/helper.php';

class UserControllerTest extends PHPUnit_Framework_TestCase {

  public function test_user_controller_receive_stripe_biller()
  {
    // Arrange
    $biller = Mockery::mock('BillerInterface');
    $biller
      ->shouldReceive('bill')
      ->once()
      ->andReturn(true);

    $userController = new UserController($biller);

    // Act
    $userController->billAction();
  }

}
