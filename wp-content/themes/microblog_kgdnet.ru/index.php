<?php get_header(); ?>
                                <section class="post">
                                    <h3 class="title__post"><a href="#" class="link">{ Заголовок второго поста и еще раз длинного заголовка поста }</a></h3>
                                    <h4 class="subtitle__post">{ Категория: <a href="#" class="link">Категория 1</a>, Дата публикации:
                                        <a href="#" class="link"><time datetime="2021-07-07">07.07.2021</time></a> }</h4>
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
                                <section class="post">
                                    <h3 class="title__post"><a href="#" class="link">{ Заголовок первого поста }</a></h3>
                                    <h4 class="subtitle__post">{ Категория: <a href="#" class="link">Категория 1</a>, Дата публикации:
                                        <a href="#" class="link"><time datetime="2021-07-06">06.07.2021</time></a> }</h4>
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
get_template_part( 'pagination' );
get_sidebar();
get_footer();
?>