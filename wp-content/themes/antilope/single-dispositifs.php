<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<body>

    <main class="layout__singleDispositif reveal">
        <h2 class="singleDispositif__title"><?= get_the_title(); ?></h2>
        <?=  the_content();  ?>
        <figure class="singleDispositif__fig">
            <?= get_the_post_thumbnail(null, 'post-thumbnail', ['class' => 'dispositif__thumb']); ?>
        </figure>
        <div class="singleDispositif__share">
            <p><?= __('Partager sur', 'Aline-db-antilope'); ?> : </p>
		    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        </div>
        <div class="singleDispositif__content">
            <div class="singleDispositif__caracteristics">
                <h3 class="singleDispositif__subtitle"><?= __('Type de module', 'Aline-db-antilope'); ?></h3>
                <ul class="singleDispositif__list"><?= get_field('type_module',false, false) ?></ul>
            </div>
            <div class="singleDispositif__technicals">
                <h3 class="singleDispositif__subtitle"><?= __('Type de mesures', 'Aline-db-antilope'); ?></h3>
                <ul class="singleDispositif__list"><?= get_field('type_mesures',false, false) ?></ul>
            </div>
            <div class="singleDispositif__image">
	            <?php if( get_field('image') ): ?>
                    <img src="<?php the_field('image'); ?>" />
	            <?php endif; ?>
            </div>
            <div class="singleDispositif__results">
                <h3 class="singleDispositif__subtitle"><?= __('Résultats', 'Aline-db-antilope'); ?></h3>
	            <?php if( get_field('image') ): ?>
                    <img src="<?php the_field('image_resultats'); ?>" width="200" />
	            <?php endif; ?>
                <p class="singleDispositif__p"><?= get_field('resultats',false, false) ?></p>
                <p class="singleDispositif__p"><?= get_field('fichier_resultats',false, false) ?></p>
            </div>
            <div class="singleDispositif__price">
                <h3 class="singleDispositif__subtitle"><?= get_field('prix',false, false) ?></h3>
                <a title="Aller à la page contact" href="<?php echo get_home_url(). '/contact/' ;?>" class="singleDispositif__link"><?= __('Intéressé ? Contactez-nous!', 'Aline-db-antilope'); ?></a>
            </div>
        </div>
    </main>
<?php endwhile; endif; ?>


<?php get_footer(); ?>
