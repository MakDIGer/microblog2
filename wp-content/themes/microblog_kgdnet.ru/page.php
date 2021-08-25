<?php

get_header();

?>

<section class="post">
    <h3 class="title__post"><a href="/about" class="link">&#123; // О проекте // }</a></h3>
    <p class="text__post mt-4">
        <?php the_content(); ?>
    </p>
</section>

<?php

get_sidebar();

get_footer();