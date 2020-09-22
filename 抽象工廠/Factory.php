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
 * TWAPPLE CLASS
 */
class TWApple implements Tell
{
   public function call() {
      echo ('蘋果打電話');
   }

   public function receive()
   {
      echo ('蘋果接電話');
   }
}

/**
 * TWSony CLASS
 */
class TWSony implements Tell
{
   public function call() {
      echo ('Sony打電話');
   }

   public function receive()
   {
      echo ('Sony接電話');
   }
}

/**
 * USAAPPLE CLASS
 */
class USAApple implements Tell
{
   public function call() {
      echo ('APPLE CALL');
   }

   public function receive()
   {
      echo ('APPLE RECEIVE');
   }
}

/**
 * USASony CLASS
 */
class USASony implements Tell
{
   public function call() {
      echo ('Sony CALL');
   }

   public function receive()
   {
      echo ('Sony RECEIVE');
   }
}

/**
 * Factory Interface
 */
interface Factory
{
   public static function createApple();
   public static function createSony();
}

/**
 * TWFactory Class
 */
class TWFactory implements Factory
{
   public static function createApple()
   {
      return new TWApple();  
   }

   public static function createSony()
   {
      return new TWSony();
   }
}

/**
 * USAFactory Class
 */
class USAFactory implements Factory
{
   public static function createApple()
   {
      return new USAApple();  
   }

   public static function createSony()
   {
      return new USASony();
   }
}

$TWsonyPhone = TWFactory::createApple();
$TWsonyPhone->call();
$USAsonyPhone = USAFactory::createApple();
$USAsonyPhone->call();