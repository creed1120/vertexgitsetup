<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>

    <p class="py-4 text-3xl"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></p>
    <p><?php echo wp_trim_words(get_the_content(), 20, "...") ?></p>

    <?php endwhile; ?>
<?php endif; ?>