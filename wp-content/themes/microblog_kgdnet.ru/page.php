<?php

get_header();

?>

<section class="post">
    <h3 class="title__post"><a href="<?php the_permalink(); ?>" class="link">&#123; // <?php the_title(); ?> // }</a></h3>
    <p class="text__post mt-4">
        <?php the_content(); ?>
    </p>
</section>

<?php

get_sidebar();

get_footer();