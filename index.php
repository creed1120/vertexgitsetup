<?php 
/**
 * Main index template
 * 
 * @package Vertexgitsetup 
 * 
 */

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
        <?php

            $sql = "SELECT first_name, last_name, campus_id FROM student";

            $result = $mysqli->query($sql);

            

            if ($result->num_rows > 0) {

                echo $result->num_rows;

                // display data from the query
                while($row = $result->fetch_assoc()) { ?>
                    
                    <h1><?php echo $row["first_name"] . ' ' . $row["last_name"] . ' - ' . $row["campus_id"] ?></h1>

                <?php }
            } else {
                echo "0 results";
            }
            
            $result->close(); 

        ?>
            

    <?php get_template_part("partials/cta.php"); ?>

<?php include("footer.php"); ?>