<?php get_header();
if (have_posts()):
while (have_posts()):
    the_post();
?>
                                <section class="post">
                                    <h3 class="title__post"><a href="#" class="link">{ <?php echo the_title(); ?> }</a></h3>
                                    <h4 class="subtitle__post">{ Категория: <a href="/category/<?php echo get_the_category($post->id)[0]->slug; ?>" class="link"><?php echo get_the_category($post->id)[0]->name; ?></a>, Дата публикации:
                                        <a href="#" class="link"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)); ?>"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></time></a> }</h4>
                                    <p class="text__post">
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                                    </p>
                                    <p class="tags__post">{ Теги: {{ <a href="#" class="link">HTML</a> }}, {{ <a
                                            href="#" class="link">PHP</a> }}, {{ <a href="#" class="link">Bootstrap</a> }} }</p>
                                </section>
<?php
endwhile;
endif;
get_template_part( 'pagination' );
get_sidebar();
get_footer();
?>