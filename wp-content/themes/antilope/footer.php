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
                <a title="Lien vers le site des ingénieurs orientations électronique de la HEPL" href="https://www.ingehepl.be/master-en-sciences-de-lingenieur-industriel-orientation-electronique-systemes-embarques/" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/logo_electro.png'; ?>" alt="Logo du service électronique de la HEPL" width="180" height="150"></a>
            </li>
            <li class="footer__li">
                <a title="Lien vers le site de la HEPL" target="_blank" href="https://www.hepl.be/fr/formations"><img src="<?php echo get_template_directory_uri().'/img/Logo_HEPL.png'; ?>" alt="Logo de la HEPL" width="180" height="150"></a>
            </li>
        </ul>
        <div class="footer__img">
            <figure>
                <img class="footer__logo" src="<?php echo get_template_directory_uri().'/img/logo-breatheantilope.png'; ?>" alt="Logo Breathe Antilope" width="150" height="150">
            </figure>
        </div>
        <ul class="footer__menu">
            <li class="footer__link">
                <a title="Aller à la page des mentions légales" href="<?php echo get_home_url(). '/politique-de-confidentialite/'; ?>">  <?= __('Mentions légales', 'Aline-db-antilope'); ?></a>
            </li>
            <li class="footer__create">
                <p>Site développé par Aline DE BARROS @2022</p>
            </li>
            <li class="footer__link">
                <a title="Aller à la page contact" href="<?php echo get_home_url(). '/contact/' ;?>">Contact</a>
            </li>
        </ul>
    </div>
</footer>