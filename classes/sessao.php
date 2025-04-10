<?php

class session {

    public static function startSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function setData($keyName, $keyValue) {
        $_SESSION[$keyName] = $keyValue;
    }

    public static function getData($keyName) {
        return $_SESSION[$keyName] ?? null;
    }

    public static function destroyAll() {
        session_destroy();
        $_SESSION = [];
    }
}
