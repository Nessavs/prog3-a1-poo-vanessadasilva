<?php

require_once 'useruario.php';

class authLogin
{
  private static $userList = [];

  public static function registerUser($newUser)
  {
    self::$userList[] = $newUser;
  }

  public static function tryLogin($emailTry, $passwordTry)
  {
    foreach (self::$userList as $oneUser) {
      if ($oneUser->getUserEmail() == $emailTry && $oneUser->checkPassword($passwordTry)) {
        return $oneUser;
      }
    }
    return null;
  }
}
