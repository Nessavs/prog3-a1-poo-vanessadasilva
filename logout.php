<?php
require_once 'classes/sessao.php';

session::startSession();
session::destroyAll();

header("Location: login.php");
exit;
