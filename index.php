<?php 
/**
 * Main index template
 * 
 * 
 */

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

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>

                <p class="py-4 text-3xl"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></p>
                <p><?php echo wp_trim_words(get_the_content(), 20, "...") ?></p>

                <?php endwhile; ?>
            <?php endif; ?>

    <?php get_template_part("partials/cta.php"); ?>

<?php include("footer.php"); ?>