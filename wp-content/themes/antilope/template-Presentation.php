<?php /* Template Name: Presentation page template */ ?>
<?php get_header(); ?>



<main class="layout">
<section class="layout__but">
    <h2 class="but__title"><?= __('Dans quel but ?', 'Aline-db-antilope'); ?></h2>
    <div class="but__container">
        <p class="but__description">En 2020, nul ne peut ignorer les problèmes de pollution. Les dernières études publiées par l’OMS (Organisation Mondiale de la Santé) montrent que plus de 90% de la population mondiale est exposée à un air extérieur toxique. Cette pollution est même devenue une urgence de santé publique.  Une récente analyse montre même que 7 millions de décès prématurés surviennent chaque année à cause de la pollution de l'air. Ces statistiques en font une cause plus meurtrière que le tabagisme. L'impact des différents polluants sur de nombreuses maladies reste encore à établir, ce qui suggère que les dommages cardiaques et pulmonaires connus ne sont que "la partie émergée de l'iceberg".
            C’est dans cette optique la que nous proposons un système low-cost de mesure des polluants atmosphériques tel que les oxydes d’azote (NO&NO2), ozone (O3) et les particules fines (PM 2.5).  Ce système de mesure, appelé ANTILOPE, est basé sur une approche « low cost » et se distingue donc des autres appareils du marché.
            Différentes variantes de nos modules existent selon les modes de communication (enregistrements sur carte SD, communication Bluetooth ou rapatriement des données via GSM) et selon les types de capteurs utilisés (électrochimiques classiques ou à métal oxyde). Pour le moment, une quarantaine de modules a déjà été produit et sont en test à différents endroits de la Région Wallonne.
            Nous proposons de montrer dans cette communication, les différentes variantes de nos modules ANTILOPE ainsi que de présenter les résultats des mesures faites en environnement contrôlé (matrice de gaz) ainsi que des mesures faites en environnement extérieur que nous confronterons avec les mesures réalisées par les appareils professionnels.
        </p>
        <figure class="but__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_pre-post_confinement_liege.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_pre-post_confinement_liege-150x150.jpg 767px'; ?>,
                         <?php echo get_template_directory_uri().'/img/pollution_pre-post_confinement_liege-300x181.jpg 1024px'; ?>"
                 alt="Graphique des mesures de pollution avent et après le confinement en 2020">
        </figure>
        <figure class="but__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/pollution_tueur_invisible-300x181.jpg 1024px'; ?>"
                 alt="Illustration: la pollution tueur silencieux">
        </figure>
        <figure class="but__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_2.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_2-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_2-300x181.jpg 1024px'; ?>"
                 alt="Illustration: la pollution tueur invisible">
        </figure>
        <figure class="but__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_3.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_3-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_3-300x181.jpg 1024px'; ?>"
                 alt="Illustration: la pollution tueur invisible">
        </figure>
        <p class="but__conclusion">Ses chiffres sont interpellant ! Nos dispositifs permettent de mieux comprendre et mesurer la qualité de l'air dans nos villes peut importe quel moyen de locomotion on utilise !</p>
    </div>
</section>

    <section class="layout__how">
        <h2 class="how__title"><?= __('Comment', 'Aline-db-antilope'); ?> ?</h2>
        <div class="how__content">
            <div class="how__video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Nl36pDofK0k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="how__video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6EWfUtCDh24" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    </section>

<section class="layout__who">
    <h2 class="who__title"><?= __('Par qui ?', 'Aline-db-antilope'); ?></h2>
    <div class="who__container" itemscope itemtype="https://schema.org/Person">
        <div class="who__partner">
            <figure class="who__fig">
                <figcaption class="who__legend">L'<abbr title="Institut Scientifique du Service Public">ISSEP</abbr> est une unité d'Aministration Publique qui surveille l'environnement,
                    prévient les risques et nuisances, effectue des recherches scientifique et Laboratoire de Référence pour la Wallonie.</figcaption>
                <img itemprop="image" src="<?php echo get_template_directory_uri().'/img/logo_ISSEP.png'; ?>"
                     srcset="<?php echo get_template_directory_uri().'/img/logo_ISSEP@0.5x.png 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/logo_ISSEP@1.5x.png 1024px'; ?>"
                     alt="Logo de l'ISSEP">
            </figure>
            <div class="partner__description">
                <p><span itemprop="name">Fabian Lenartz</span> : <span itemprop="worksfor" >Département Qualité de l'air</span></p>
                <p><span itemprop="name">Guy Gerard</span> : <span itemprop="jobTitle">Responsable</span>, <span itemprop="worksfor" >Département Qualité de l'air</span></p>
            </div>
            <a target="_blank" title="Aller sur le site de l'ISSEP" class="who__link" href="https://www.issep.be" itemprop="url">Site de l'<abbr title="Institut Scientifique du Service Public">ISSEP</abbr></a>
        </div>
        <div class="who__partner">
            <figure class="who__fig">
                <figcaption class="who__legend" >Le service électronique de la <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr></figcaption>
                <img itemprop="image" width="180" height="130" src="<?php echo get_template_directory_uri().'/img/logo_electro.png'; ?>"
                     srcset="<?php echo get_template_directory_uri().'/img/logo_electro-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/logo_electro-300x300.jpg 1024px'; ?>"
                     alt="Logo du service électronique de la HEPL">
            </figure>
            <div class="partner__description">
                <p><span itemprop="name">Valery Broun, Sylvain Gichaux et Christophe Brose</span> : <span itemprop="jobTitle">Ingénieurs</span>, <span itemprop="worksfor" > <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr> (Service électronique & systèmes embarqué, Département Ingénieur)</span></p>
            </div>
            <a target="_blank" title="Aller sur le site du service électronique de la HEPL" class="who__link" href="https://hepl-electro.wixsite.com/index" itemprop="url">Site du service électronique</a>
        </div>
        <div class="who__partner">
            <figure class="who__fig">
                <figcaption class="who__legend">La <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr> et le cursus ingénierie</figcaption>
                <img itemprop="image" src="<?php echo get_template_directory_uri().'/img/Logo_HEPL.png'; ?>" alt="Logo de la HEPL">
            </figure>
            <div class="partner__description"></div>
            <a target="_blank" title="Aller sur le site de la HEPL" class="who__link" href="https://www.hepl.be/fr/master-ingenieur-industriel" itemprop="url">Site de la <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr> : master ingénieur</a>
        </div>
    </div>
    <div class="who__contact"><a title="Aller sur la page contact" class="who__link" href="<?= get_home_url(); ?>/contact"><?= __('Contactez-les !', 'Aline-db-antilope'); ?> </a></div>
</section>


<?php get_footer(); ?>
