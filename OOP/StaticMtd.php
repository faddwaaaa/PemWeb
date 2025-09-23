<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
  public static function oke() {
    echo "Saya sedang belajar PHP!";
  }

  public function __construct() {
    self::welcome();
    self::oke();
  }
}

new greeting();
?>