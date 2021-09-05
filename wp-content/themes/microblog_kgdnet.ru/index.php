<?php get_header();
if (have_posts()):
while (have_posts()):
    the_post();
?>
                                <section class="post">
                                    <h3 class="title__post"><a href="<?php echo the_permalink(); ?>" class="link">{ <?php echo the_title(); ?> }</a></h3>
                                    <h4 class="subtitle__post">{ Категория: <a href="/category/<?php echo get_the_category($post->id)[0]->slug; ?>" class="link"><?php echo get_the_category($post->id)[0]->name; ?></a>, Дата публикации:
                                        <a href="#" class="link"><time datetime="<?php echo date('Y-m-d', strtotime($post->post_date)); ?>"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></time></a> }</h4>
                                    <p class="text__post">
                                        <?php echo the_excerpt();  ?>
                                    </p>
                                    <p class="tags__post">{ Теги: {{ <a href="#" class="link">HTML</a> }}, {{ <a
                                            href="#" class="link">PHP</a> }}, {{ <a href="#" class="link">Bootstrap</a> }} }</p>
                                </section>
<?php
endwhile;
else: ?>
                                <section class="post">
                                    <h3 class="title__post">Сообщений нет</h3>
                                    <p class="text__post">
                                        Сообщений для отображения нет.
                                    </p>
                                </section>
<?php
endif;
get_template_part( 'pagination' );
get_sidebar();
get_footer();
?>