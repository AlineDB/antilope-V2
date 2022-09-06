<?php

?>

<footer class="footer">
    <h2 class="footer__title"><?= __('Pied de page', 'Aline-db-antilope'); ?></h2>
    <div class="footer__container">
        <ul class="footer__list">
            <li class="footer__li">
                <a title="Lien vers le site de l'ISSEP" target="_blank" href="https://www.issep.be/"><img src="<?php echo get_template_directory_uri().'/img/logo_ISSEP.png'; ?>" alt="Logo de l'ISSEP" width="130" height="150"></a>
            </li>
            <li class="footer__li">
                <a title="Lien vers le site des ingénieurs orientations électronique de la HEPL" href="https://hepl-electro.wixsite.com/index" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/logo_electro.png'; ?>" alt="Logo du service électronique de la HEPL" width="130" height="auto"></a>
            </li>
            <li class="footer__li">
                <a title="Lien vers le site de la HEPL" target="_blank" href="https://www.hepl.be/fr/formations"><img src="<?php echo get_template_directory_uri().'/img/Logo_HEPL.png'; ?>" alt="Logo de la HEPL" width="130" height="auto"></a>
            </li>
        </ul>
        <div class="footer__img">
            <figure>
                <img class="footer__logo" src="<?php echo get_template_directory_uri().'/img/logo-breatheantilope.png'; ?>" alt="Logo Breathe Antilope" width="150" height="150">
            </figure>
        </div>
        <ul class="footer__menu">
	        <?php foreach(dw_get_menu_items('footer') as $link): ?>
            <li class="<?= $link->getBemClasses('footer__link'); ?>">
                <a title="Allez à la page <?= $link->title ? ' title="' . $link->title . '"' : ''; ?>" href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?>><?= $link->label; ?>
                </a>
		        <?php endforeach; ?>
            <li class="footer__create">
                <p><?= __('Site développé par', 'Aline-db-antilope'); ?> Aline DE BARROS @2022</p>
            </li>
        </ul>
    </div>

</footer>
</body>
</html>