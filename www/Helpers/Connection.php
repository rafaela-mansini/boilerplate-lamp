<?php

namespace Helpers;

class Connection {
  
    public static $instance;

  public function __construct(){
    return self::getInstance();
  }

  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_AUTOCOMMIT=> 0));
      self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return self::$instance;
  }

}