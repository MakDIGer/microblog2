<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Микроблог</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <script defer src="js/script.bundle.js"></script>
    <?php wp_head(); ?>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    <?php wp_enqueue_style('style', get_stylesheet_uri()); ?>
</head>
<body>
<?php wp_body_open(); ?>

<div class="wrapper">
    <div class="container wrapper-grey wrapper-margin">
        <header id="main-header">
            <div class="container m-auto p-0">
                <div class="row">
                    <hgroup class="main-header__title-group">
                        <h1 class="title-group__main-title"><a class="title-link" href="#">{ Микроблог }</a></h1>
                        <h2 class="title-group__sub-title">{{ Просто еще один блог! }}</h2>
                    </hgroup>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg">
            <div class="container m-auto p-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                        wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => 'main',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] );
                    ?>
<!--                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" aria-current="page" href="#">[ Главная ]</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                                [ Категории ]-->
<!--                            </a>-->
<!--                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                                <li><a class="dropdown-item" href="#">[ Linux ]</a></li>-->
<!--                                <li><a class="dropdown-item" href="#">[ Windows ]</a></li>-->
<!--                                <li><a class="dropdown-item" href="#">[ Mac ]</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="#">[ О проекте ]</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="#">[ Обратная связь ]</a>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
            </div>
        </nav>
        <div class="container" id="main-content">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div id="posts">
                        <div class="container m-0 p-0">
                            <div class="row">