<?php
/**
 * TELL interface
 */
interface Tell 
{
   function call();
   function receive();
}

/**
 * APPLE CLASS
 */
class Apple implements Tell
{
   public function call() {
      echo ('蘋果打電話');
   }

   public function receive()
   {
      echo ('蘋果掛電話');
   }
}

/**
 * Sony CLASS
 */
class Sony implements Tell
{
   public function call() {
      echo ('Sony打電話');
   }

   public function receive()
   {
      echo ('Sony掛電話');
   }
}

/**
 * Factory Interface
 */
interface Factory
{
   public static function createPhone();
}

/**
 * AppleFactory Class
 */
class AppleFactory implements Factory
{
   public static function createPhone()
   {
      return new Apple();
   }
}

/**
 * SonyFactory Class
 */
class SonyFactory implements Factory
{
   public static function createPhone()
   {
      return new Sony();
   }
}

$sonyPhone = SonyFactory::createPhone();
$sonyPhone->call();