<?php 
/**
 * Main index template
 * 
 * @package Vertexgitsetup 
 * 
 */

 class Person
 {
     public $age;

     public function __construct($age)
     {
         $this->age = $age;
         echo 'The "' . __CLASS__ . '" class has been instantiated. </br>';
     }

     public function setAge($newAge) {
         $this->age = $newAge;
     }

     public function getAge() {
         return $this->age . "</br>";
     }
 }

 class myClass
 {
     // porperties and methods
     public $prop1 = "I'm a class property";
     public $prop2 = "I'm the second class property";

     public function myClassFunc() {
         echo "I'm a class Method/function" . "</br>";
     }
 }

 $obj = new myClass;



require "includes/db_conn.php";

include("header.php");
?>

    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-20 mx-auto text-left md:max-w-none bg-red-600">
        <h1 class="text-3xl font-bold leading-10 tracking-tight text-left text-white md:text-center sm:leading-none md:text-6xl lg:text-5xl"><span class="inline md:block">Employee Portal</span></h1>
    </div>
    <!-- End Main Hero Content -->

    <!-- Page Content -->
    <section class="w-full px-8 text-gray-700 bg-white">
        <div class="container py-5 mx-auto max-w-7xl">

        <!-- DISPLAY CONTENT -->

        
        <!-- <pre>
            <//?php var_dump($obj); ?>
        </pre> -->

        <?php
            $personObj1 = new Person(44);

            echo $personObj1->getAge();
        ?>
            

    <?php get_template_part("partials/cta.php"); ?>

<?php include("footer.php"); ?>