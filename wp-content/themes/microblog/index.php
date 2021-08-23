<?php get_header(); ?>
        <div class="container" id="main-content">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div id="posts">
                        <div class="container m-0 p-0">
                            <div class="row">
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
                                <nav aria-label="..." class="p-0 mt-4">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-block col-xl-4 p-0">
                    <section id="category">
                        <div class="title__category">Категории блога:</div>
                        <ul class="items__category">
                            <li class="item__category">&gt; [ <a href="#" class="link">HTML</a> ]</li>
                            <li class="item__category">&gt; [ <a href="#" class="link">CSS</a>CSS ]</li>
                            <li class="item__category">&gt; [ <a href="#" class="link">JS</a> ]</li>
                            <li class="item__category">&gt; [ <a href="#" class="link">PHP</a> ]</li>
                            <li class="item__category">&gt; [ <a href="#" class="link">MySQL</a> ]</li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
        <footer class="container" id="main-footer">
            <div class="row">
                <small class="footer-line">{{ &copy; 2021 Проект &nbsp;"<a href="#" class="footer-link">Микроблог</a>". }}</small>
            </div>
        </footer>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>