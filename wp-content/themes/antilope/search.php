<?php get_header(); ?>

<main class="layout__results__search">
    <section class="results">
        <h2 class="results__title"><?= __('Résultats de votre recherche', 'Aline-db-antilope'); ?></h2>
        <div class="results__container">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article class="results__post">
                    <div class="post__card">
                        <header class="post__head">
                            <h3 class="post__title"><?= get_the_title(); ?></h3>
                            <p class="post__meta"><?= __('Publié par', 'Aline-db-antilope'); ?> <?= get_the_author(); ?> le <time class="post__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date(); ?></time></p>
                        </header>
                        <figure class="post__fig">
                            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'post__thumb']); ?>
                        </figure>
                        <div class="post__excerpt">
                            <p><?= get_the_excerpt(); ?></p>
                        </div>
                        <a href="<?= get_the_permalink(); ?>" class="post__link"><?= __('Voir', 'Aline-db-antilope'); ?> "<?= get_the_title(); ?>"</a>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <div class="results__empty">
                    <p><?= __('Il n\'y a pas de résultats ...', 'Aline-db-antilope'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
