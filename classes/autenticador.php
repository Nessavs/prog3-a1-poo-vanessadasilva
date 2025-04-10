<?php

require_once 'usuario.php';

class authLogin {

  private static $filePath = 'usuarios.json';

  public static function registerUser($newUser) {
      $users = self::loadUsers();
      $users[] = [
          'name' => $newUser->getUserName(),
          'email' => $newUser->getUserEmail(),
          'password' => password_hash($_POST['passWrite'], PASSWORD_DEFAULT)
      ];
      file_put_contents(self::$filePath, json_encode($users, JSON_PRETTY_PRINT));
  }

  public static function tryLogin($emailTry, $passwordTry) {
      $users = self::loadUsers();
      foreach ($users as $oneUser) {
          if ($oneUser['email'] === $emailTry && password_verify($passwordTry, $oneUser['password'])) {
              return new usuario($oneUser['name'], $oneUser['email'], $passwordTry);
          }
      }
      return null;
  }

  private static function loadUsers() {
      if (!file_exists(self::$filePath)) {
          return [];
      }
      $jsonData = file_get_contents(self::$filePath);
      return json_decode($jsonData, true);
  }
}