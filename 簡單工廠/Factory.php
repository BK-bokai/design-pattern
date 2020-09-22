<?php
/**
 * Animal Interface
 */
interface Animal 
{
   function eat();
   function run();
}

/**
 * DOG CLASS
 */
class Dog implements Animal 
{
   public function eat()
   {
      echo ('狗吃');
   }

   public function run()
   {
      echo ('狗跑');
   }
}

/**
 * CAT CLASS
 */
class Cat implements Animal
{
   public function eat()
   {
      echo ('貓吃');
   }

   public function run()
   {
      echo ('貓跑');
   }
}

/**
 * FACTORY CLASS
 */
class Factory
{
   public static function createAnimal($animal)
   {
      switch ($animal) {
         case 'Dog':
            return new Dog();
            break;
         case 'Cat':
            return new Cat();
            break;
         default:
            return null;
            break;
      }
   }
}

$dos = Factory::createAnimal('Dog');
$dos->eat();