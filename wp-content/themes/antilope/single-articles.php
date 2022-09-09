

<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<main class="layout__singleArticle reveal">
		<h2 class="singleArticle__title"><?= get_the_title(); ?></h2>
		<div class="singleArticle__share">
            <p><?= __('Partager sur', 'Aline-db-antilope'); ?> : </p>
            <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
        </div>
		<figure class="singleArticle__fig">
            <img alt="Image de l'article" src="<?php the_field('image'); ?>" />
		</figure>
		<div class="singleArticle__content">
            <p><?php the_field('resume'); ?></p>
		</div>
        <div class="singleArticle__link">
            <a class="article__link" target="_blank" href="<?php the_field('lien'); ?>"><?= __('Lire l\'article', 'Aline-db-antilope'); ?></a>
        </div>
        <aside class="singleArticle__details">
            <h3 class="singleArticle__subtitle"><?= __('Détails', 'Aline-db-antilope'); ?></h3>
            <dl class="singleArticle__def">
                <dt class="singleArticle__label"><?= __('Date de l\'article', 'Aline-db-antilope'); ?></dt>
                <dd class="singleArticle__data">
                    <time class="singleArticle__date" datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>">
						<?= ucfirst(date_i18n('d F Y', strtotime(get_field('date', false, false)))); ?>
                    </time></dd>
				<?php if(get_field('source')):  ?>
                    <dt class="singleArticle__label"><?= __('Source', 'Aline-db-antilope'); ?></dt>
                    <dd class="singleArticle__data"><?= get_field('source', false, false);  ?>
                    </dd>
<!--                //récupérer le read more-->
				<?php endif; ?>
	</main>
<?php endwhile; endif; ?>



<?php get_footer(); ?>