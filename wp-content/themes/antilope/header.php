<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Antilope - <?= wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>" />
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>
    <meta name="description" content="Projet Antilope par Aline DE BARROS">
    <meta name="author" content="DE BARROS Aline">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HEPL, ISSEP, pollution, mesures, appareils, antilope, ingénieurs, écoles, électronique, dispositifs, modules, qualité, air, campagne, mobile, fixe">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
</head>
<header class="header">
    <h1 class="header__title" lang="en-GB"><?= get_bloginfo('name'); ?></h1>
    <p class="header__tagline"><?= get_bloginfo('description'); ?></p>
    <figure>
        <img class="header__logo" src="<?php echo get_template_directory_uri().'/img/logo-breatheantilope.png'; ?>" alt="Logo Breathe Antilope" width="150" height="150">
    </figure>
    <nav class="header__nav">
        <button class="nav__close"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#000000" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg></button>
            <h2 class="nav__title"><?= __('Navigation principale', 'Aline-db-antilope'); ?></h2>
            <ul class="nav__container">
		        <?php foreach(dw_get_menu_items('primary') as $link): ?>
                <li class="<?= $link->getBemClasses('nav__item'); ?>">
                    <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?> class="nav__link"><?= $link->label; ?>
                    </a>
			        <?php endforeach; ?>

                  <div class="nav__languages">
				        <?php foreach(pll_the_languages(['raw' => true]) as $code => $locale) :?>
                            <a href="<?= $locale['url']; ?>" lang="<?= $locale['locale']; ?>" hreflang="<?= $locale['locale']; ?>" class="nav__locale" title="<?= $locale['name']; ?>"><?= $code; ?></a>
				        <?php endforeach; ?>
                    </div>
                </li>
            </ul>
    <button class="header__burger"><span class="burger__bar"></span></button>
    </nav>
    <div class="header__search">
        <?= get_search_form() ;?>
    </div>
    <div id="FixedNav" class="cInvisible">
        <a  href="#" title="Retournez en haut">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#0081A7" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#0081A7" class="bi bi-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#FFFFFF" class="bi bi-circle-fill" viewBox="0 0 16 16">
                <circle cx="8" cy="8" r="8"/>
            </svg>
        </a>
    </div>

</header>
