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
    <meta name="keywords" content=" HEPL, ISSEP, pollution, mesures, appareils, antilope, ingénieurs, écoles, électronique, dispositifs, modules, qualité, air, campagne, mobile, fixe">
    <link rel=«preconnect» href=«https://fonts.googleapis.com>
    <link rel=«preconnect» href=«https://fonts.gstatic.com» crossorigin>
    <link href=«https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap» rel=«stylesheet»>
</head>
<header class="header">
    <h1 class="header__title" lang="en-GB"><?= get_bloginfo('name'); ?></h1>
    <p class="header__tagline"><?= get_bloginfo('description'); ?></p>


    <nav class="header__nav">
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
    </nav>
    <form class="header__search search" role="search" method="get" action="<?= get_home_url(); ?>">
        <div class="search__container">
            <?= get_search_form() ;?>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#61B5C0" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </form>
    <div id="FixedNav" class="cInvisible">
        <a  href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#61B5C0" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
            </svg>
        </a>
    </div>
</header>
