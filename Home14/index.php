<?php $data = require 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="src/fonts/fonts.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <title> <?php echo $data['pageTitle']; ?></title>
</head>

<body data-spy="scroll" data-target="#additionalNav" data-offset="100">

<main class="main" id="home">
    <header class="header header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 justify-content-between">
                        <a href="#home" class="header__logo">
                            <img class="header__logo-a" src="<?php echo $data['siteLogo']; ?>"
                                 alt="<?php echo $data['altLogo']; ?>">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse header__menu justify-content-end" id="mainNav">
                            <ul class="list-inline list-unstyled navbar-nav nav nav-tabs border-0">
                                <?php foreach ($data['mainMenu'] as $menuItem) { ?>
                                    <li class="list-inline-item mr-0"><a href="<?php echo $menuItem['url']; ?>"
                                                                         class="header__menu-item nav-link active"><?php echo $menuItem['title']; ?></a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <header class="header header-additional">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light p-0 justify-content-between">
                        <a href="#home" class="header__logo">
                            <img class="header__logo-a" src="<?php echo $data['siteLogo']; ?>"
                                 alt="<?php echo $data['altLogo']; ?>">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#additionalNav"
                                aria-controls="additionalNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse header__menu justify-content-end" id="additionalNav">
                            <ul class="list-inline list-unstyled navbar-nav nav nav-tabs border-0" role="tablist">
                                <?php foreach ($data['mainMenu'] as $menuItem) { ?>
                                    <li class="list-inline-item mr-0 nav-item"><a href="<?php echo $menuItem['url']; ?>"
                                                                                  class="header__menu-item nav-link"><?php echo $menuItem['title']; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col">
                <div class="main__content">
                    <h1 class="main__content-title"><?php echo $data['contentTitle']; ?></h1>
                    <p class="main__content-text"><?php echo $data['contentText']; ?></p>
                    <div>
                        <a href="<?php echo $data['buttonUrl']; ?>"
                           class="main__content-button button button-pink d-inline-block"><?php echo $data['buttonTitle']; ?></a>
                    </div>
                    <a href="<?php echo $data['scrollDown']['url']; ?>" id="mouse"
                       class="main__content-scroll-down scroll-down d-flex flex-column align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px"
                             height="43px">
                            <path class="main__content-scroll-down-icon scroll-down-icon" fill-rule="evenodd"
                                  fill="rgb(255, 255, 255)"
                                  d="M12.500,43.000 C5.596,43.000 -0.000,37.404 -0.000,30.500 L-0.000,12.500 C-0.000,5.597 5.596,0.000 12.500,0.000 C19.404,0.000 25.000,5.597 25.000,12.500 L25.000,30.500 C25.000,37.404 19.404,43.000 12.500,43.000 ZM14.375,9.521 C14.375,8.673 13.363,7.985 12.500,7.985 C11.637,7.985 10.625,8.673 10.625,9.521 L10.625,13.207 C10.625,14.055 11.637,14.743 12.500,14.743 C13.363,14.743 14.375,14.055 14.375,13.207 L14.375,9.521 Z"></path>
                        </svg>
                        <?php echo $data['scrollDown']['title']; ?></a><a
                            href="<?php echo $data['scrollDown']['url']; ?>"
                            class="main__content-scroll-down scroll-down d-flex flex-column align-items-center">
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<section id="offer" class="code">
    <div class="container">
        <div class="row justify-content-between">
            <?php foreach ($data['features'] as $featuresItem) { ?>
                <div class="col-md-6 col-lg-5">
                    <div class="code__part">
                        <h2 class="code__part-title"><?php echo $featuresItem['title']; ?></h2>
                        <p class="code__part-text">
                            <?php echo $featuresItem['description']; ?>
                        </p>
                        <div>
                            <a href="<?php echo $featuresItem['buttonUrl']; ?>"
                               class="code__part-button button button-pink d-inline-block"><?php echo $featuresItem['buttonTitle']; ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-6 col-lg-5">
                <div class="code__part mt-5 mt-sm-5 mt-md-0">
                    <h2 class="code__part-title"></h2>
                    <p class="code__part-text">

                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="what-we-do__title"><?php echo $data['whatWeDo']; ?></h2>
            </div>
        </div>
        <div class="row justify-content-between">
            <?php foreach ($data['whatDoContent'] as $whatDoContentItem) { ?>
                <div class="col-md-12 col-lg-5">
                    <div class="what-we-do__part d-flex">
                        <div class="what-we-do__part-icon">
                            <img src="<?php echo $whatDoContentItem['icon']; ?>" height="95" width="105" alt="">
                        </div>
                        <div class="what-we-do__part-content">
                            <h3 class="what-we-do__part-content-name"><?php echo $whatDoContentItem['title']; ?></h3>
                            <p class="what-we-do__part-content-text">
                                <?php echo $whatDoContentItem['description']; ?>
                            </p>
                        </div>

                    </div>
                </div>
            <?php } ?>
            <div class="col-md-12 col-lg-5">
                <div class="what-we-do__part d-flex">
                    <div class="what-we-do__part-icon">

                    </div>
                    <div class="what-we-do__part-content">
                        <h3 class="what-we-do__part-content-name"></h3>
                        <p class="what-we-do__part-content-text">

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="what-we-do__part d-flex">
                    <div class="what-we-do__part-icon">

                    </div>
                    <div class="what-we-do__part-content">
                        <h3 class="what-we-do__part-content-name"></h3>
                        <p class="what-we-do__part-content-text">

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5">
                <div class="what-we-do__part d-flex">
                    <div class="what-we-do__part-icon">

                    </div>
                    <div class="what-we-do__part-content">
                        <h3 class="what-we-do__part-content-name"></h3>
                        <p class="what-we-do__part-content-text">

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col what-we-do__button">
                <a href="<?php echo $data['buttonUrl']; ?>"
                   class="button button-pink d-inline-block"><?php echo $data['buttonTitle']; ?></a>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="portfolio">
    <div class="portfolio__slider">
        <?php foreach ($data['portfolio'] as $portfolioItem) { ?>
            <a href="#" class="portfolio__slider-slide">
                <div>
                    <img class="portfolio__slider-slide-img" src="<?php echo $portfolioItem['url']; ?>"
                         alt="<?php echo $portfolioItem['alt']; ?>">
                </div>
                <div class="portfolio__slider-slide-overlay">
                    <p class="portfolio__slider-slide-overlay-name"><?php echo $portfolioItem['title']; ?></p>
                    <p class="portfolio__slider-slide-overlay-text">
                        <?php echo $portfolioItem['description']; ?>
                    </p>
                    <div>
                        <span href="<?php echo $portfolioItem['buttonUrl']; ?>"
                              class="portfolio__slider-slide-overlay-button button button-pink d-inline-block"><?php echo $portfolioItem['buttonTitle']; ?></span>
                    </div>
                </div>
            </a>
        <?php } ?>
        <a href="#" class="portfolio__slider-slide">
            <div>
                <img class="portfolio__slider-slide-img">
            </div>
            <div class="portfolio__slider-slide-overlay">
                <p class="portfolio__slider-slide-overlay-name"></p>
                <p class="portfolio__slider-slide-overlay-text">

                </p>
                <div>
                    <span class="portfolio__slider-slide-overlay-button button button-pink d-inline-block"></span>
                </div>
            </div>
        </a>
        <a href="#" class="portfolio__slider-slide">
            <div>
                <img class="portfolio__slider-slide-img">
            </div>
            <div class="portfolio__slider-slide-overlay">
                <p class="portfolio__slider-slide-overlay-name"></p>
                <p class="portfolio__slider-slide-overlay-text">

                </p>
                <div>
                    <span class="portfolio__slider-slide-overlay-button button button-pink d-inline-block"></span>
                </div>
            </div>
        </a>
    </div>
</section>
<section id="about-us" class="about-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 text-center about-us__header">
                <h2 class="about-us__header-title"><?php echo $data['aboutUs']['title']; ?></h2>
                <p class="about-us__header-text">
                    <?php echo $data['aboutUs']['description']; ?>
                </p>
            </div>
        </div>
        <div class="about-us__team text-center">
            <div class="row">
                <?php foreach ($data['team'] as $teamItem) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="about-us__team-person">
                        <div class="about-us__team-person-avatar">
                            <img class="rounded-circle" src="<?php echo $teamItem['url']; ?>">
                        </div>
                        <p class="about-us__team-person-name"><?php echo $teamItem['title']; ?></p>
                        <p class="about-us__team-person-text">
                            <?php echo $teamItem['description']; ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-3 col-md-6">
                    <div class="about-us__team-person">
                        <div class="about-us__team-person-avatar">
                            <img class="rounded-circle">
                        </div>
                        <p class="about-us__team-person-name"></p>
                        <p class="about-us__team-person-text">

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-us__team-person">
                        <div class="about-us__team-person-avatar">
                            <img class="rounded-circle">
                        </div>
                        <p class="about-us__team-person-name"></p>
                        <p class="about-us__team-person-text">

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-us__team-person">
                        <div class="about-us__team-person-avatar">
                            <img class="rounded-circle">
                        </div>
                        <p class="about-us__team-person-name"></p>
                        <p class="about-us__team-person-text">

                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <a href="<?php echo $data['buttonUrl']; ?>" class="about-us__button button button-pink d-inline-block"><?php echo $data['buttonTitle']; ?></a>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact">
    <div class="contact__map" id="map">
        <iframe src="<?php echo $data['mapUrl']; ?>"
                width="100%" height="600" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center footer__content">
                <p class="footer__content-text">
                    <?php echo $data['footer']['description']; ?>
                </p>
                <p class="footer__content-text"><?php echo $data['footer']['title']; ?> <a class="footer__content-link"
                                                                                href="<?php echo $data['footer']['link']; ?>"><?php echo $data['footer']['linkText']; ?></a></p>
            </div>
        </div>
    </div>
</footer>

<!-- slider -->
<script type="text/javascript" src="src/js/slick.min.js"></script>
<script src="src/js/main.js"></script>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>


