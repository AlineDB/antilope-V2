<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ):
the_post(); ?>
<main class="layout__contact">
    <h2 class="contact__title"><?= get_the_title(); ?></h2>
    <div class="contact__content">
		<?= get_the_content(); ?>
		<?php echo do_shortcode("'[contact-form-7 id='168' title='Contc']"); ?>
    </div>
	<?php endwhile; endif; ?>
    <div class="contact__container">
        <div class="contact__partner" itemscope itemtype="https://schema.org/Organization">
            <figure class="contact__fig">
                <img itemprop="logo" src="<?php echo get_template_directory_uri() . '/img/logo_ISSEP.png'; ?>"
                     srcset="<?php echo get_template_directory_uri() . '/img/logo_ISSEP@0.5x.png 767px'; ?>,
                        <?php echo get_template_directory_uri() . '/img/logo_ISSEP@1.5x.png 1024px'; ?>"
                     alt="Logo de l'ISSEP">
                <figcaption class="contact__legend" itemprop="address" itemscope
                            itemtype="https://schema.org/PostalAddress">
                    <span itemprop="streetAddress">Rue Chéra 200</span><br>
                    <span itemprop="postalCode">4020</span>
                    <span itemprop="addressLocality">Liège</span><br>
                    <span itemprop="telephone">04 229 83 11</span><br>
                    <a href="mailto:direction@issep.be" itemprop="email">direction@issep.be</a>
                </figcaption>
            </figure>
            <a title="Aller sur le site de l'ISSEP" class="contact__link" href="https://www.issep.be" itemprop="url">Site
                de l'<abbr title="Institut Scientifique du Service Public">ISSEP</abbr></a>
        </div>
        <div class="contact__partner" itemscope itemtype="https://schema.org/Organization">
            <figure class="contact__fig">
                <img itemprop="logo" width="180" height="130"
                     src="<?php echo get_template_directory_uri() . '/img/logo_electro.png'; ?>"
                     srcset="<?php echo get_template_directory_uri() . '/img/logo_electro-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri() . '/img/logo_electro-300x300.jpg 1024px'; ?>"
                     alt="Logo du service électronique de la HEPL">
                <figcaption class="contact__legend" itemprop="address" itemscope
                            itemtype="https://schema.org/PostalAddress">
                    <span itemprop="streetAddress">Quai Gloesner 6</span><br>
                    <span itemprop="postalCode">4020</span>
                    <span itemprop="addressLocality">Liège</span><br>
                    <span itemprop="telephone">04 279 64 00</span><br>
                    <a href="mailto:christophe.brose@hepl.be" itemprop="email">christophe.brose@hepl.be</a>
                </figcaption>
            </figure>
            <a title="Aller sur le site du service électronique de la HEPL" class="contact__link"
               href="https://hepl-electro.wixsite.com/index" itemprop="url">Site du service électronique</a>
        </div>
        <div class="contact__partner" itemscope itemtype="https://schema.org/Organization">
            <figure class="contact__fig">
                <img itemprop="logo" src="<?php echo get_template_directory_uri() . '/img/Logo_HEPL.png'; ?>"
                     alt="Logo de la HEPL">
                <figcaption class="contact__legend" itemprop="address" itemscope
                            itemtype="https://schema.org/PostalAddress">
                    <span itemprop="streetAddress">Quai Gloesner 6</span><br>
                    <span itemprop="postalCode">4020</span>
                    <span itemprop="addressLocality">Liège</span><br>
                    <span itemprop="telephone">04 279 64 00</span><br>
                    <a href="mailto:hepl@provincedeliege.be" itemprop="email">hepl@provincedeliege.be</a>
                </figcaption>
            </figure>
            <a title="Aller sur le site de la HEPL" class="contact__link"
               href="https://www.hepl.be/fr/master-ingenieur-industriel" itemprop="url">Site de la <abbr
                        title="Haute Ecole de la Province de Liège">HEPL</abbr> : master ingénieur</a>
        </div>
    </div>
</main>

<?= get_footer(); ?>
