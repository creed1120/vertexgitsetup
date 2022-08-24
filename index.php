<?php 
/**
 * Main index template
 * 
 * @package Vertexgitsetup 
 * 
 */

require "includes/db_conn.php";

include("header.php");

// CLASS CREATION
class Person
{
    public $age;

    public function __construct($age)
    {
        $this->age = $age;
        echo 'The "' . __CLASS__ . '" class has been instantiated now. </br>';
    }

    public function setAge($newAge) {
        $this->age = $newAge;
    }

    public function getAge() {
        return $this->age . "</br>";
    }
}

<<<<<<< HEAD
?>
=======
                    <h1 class="text-4xl font-extrabold mb-10">GIT Actions Workflow is working like a Friggin Champ!!! 🔥</h1>
                    <h3>ADDED NEW FEATURE WITHN STAGING BRANCH</h3>
                    <h3>ADDED SECOND NEW FEATURE WITHN STAGING BRANCH</h3>
                    <h3>ADDED THIRD NEW FEATURE WITHN STAGING BRANCH</h3>
>>>>>>> production

    <!-- Main Hero Content -->
    <div class="container max-w-lg px-4 py-20 mx-auto text-left md:max-w-none bg-red-600">
        <h1 class="text-3xl font-bold leading-10 tracking-tight text-left text-white md:text-center sm:leading-none md:text-6xl lg:text-5xl">
            <span class="inline md:block">Wordpress Coding</span>
        </h1>
    </div>
    <!-- End Main Hero Content -->

    <!-- Page Content -->
    <section class="w-full px-8 text-gray-700 bg-white">
        <div class="container py-5 mx-auto max-w-7xl">

        <!-- DISPLAY CONTENT -->

        <?php
            // INSTANTIATE THE "Person" CLASS
            $personObj1 = new Person(44);

            echo $personObj1->getAge();
        ?>

<?php include("footer.php"); ?>