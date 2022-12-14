<?php /* Template Name: Articles page template */ ?>
<?php get_header(); ?>
<body>

	<section class="layout__articlesPage reveal">
		<h2 class="articlesPage__title"><?= __('Les articles', 'Aline-db-antilope'); ?></h2>
		<div class="articlesPage__container">
			<?php if(($articles = dw_get_articles(300))->have_posts()): while($articles->have_posts()): $articles->the_post(); ?>
				<article class="articlePage__article">
					<div class="articlePage__card">
                        <h3 class="articlePage__title"><?= get_the_title(); ?></h3>
                        <p class="articlePage__date"><time class="article__time" datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>">
								<?= ucfirst(date_i18n('F, Y', strtotime(get_field('date', false, false)))); ?>
                            </time></p>
						<figure class="articlePage__fig">
                            <img alt="Image de l'article" src="<?php the_field('image'); ?>" />
						</figure>
					</div>
                    <a title="Voir le résumé de l'article" href="<?= get_the_permalink(); ?>" class="articlesPage__link"><?=  __('Lire le résumé', 'Aline-db-antilope'); ?></a>
				</article>
			<?php endwhile; else: ?>
				<p class="articles__empty"><?= __('Il n\'y a pas d\'articles à vous monter ...', 'Aline-db-antilope'); ?></p>
			<?php endif; ?>

		</div>
	</section>

</body>


<?php get_footer(); ?>