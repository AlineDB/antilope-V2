<?php /* Template Name: Dispositifs page template */ ?>
<?php get_header(); ?>

<section class="layout__dispositifsPage">
	<h2 class="dispositifsPage__title"><?= __('Les dispositifs', 'Aline-db-antilope'); ?></h2>
	<div class="dispositifsPage__containers">
		<?php if(($dispositifs = dw_get_projects(300))->have_posts()): while($dispositifs->have_posts()): $dispositifs->the_post(); ?>
			<article class="dispositifPage">
				<div class="dispositifPage__card">
					<header class="dispositifPage__head">
						<h3 class="dispositifPage__title"><?= get_the_title(); ?></h3>
					</header>
					<figure class="dispositifPage__fig">
                        <?= get_the_post_thumbnail(null, 'post-thumbnail', ['class' => 'dispositifs__thumb']); ?>
					</figure>
                    <a title="Voir le module <?= get_the_title(); ?>" href="<?= get_the_permalink(); ?>" class="dispositif__linkPage"><?= __('Voir le projet', 'Aline-db-antilope'); ?> <?= get_the_title(); ?></a>
				</div>
			</article>
		<?php endwhile; else: ?>
			<p class="dispositifs__empty"><?= __('Il n\'y a pas de projet à vous monter ...', 'Aline-db-antilope'); ?></p>
		<?php endif; ?>

	</div>
</section>



<?php get_footer(); ?>
