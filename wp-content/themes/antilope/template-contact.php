<?php /* Template Name: Contact page template */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ): while ( have_posts() ):
the_post(); ?>
<main class="layout__contact">
    <h2 class="contact__title"><?= get_the_title(); ?></h2>
    <div class="contact__content">
		<?= get_the_content(); ?>
    </div>
	<?php if ( ! isset( $_SESSION['contact_form_feedback'] ) || ! $_SESSION['contact_form_feedback']['success'] ) : ?>
        <form action="<?= get_home_url(); ?>/wp-admin/admin-post.php/" method="POST" class="contact__form" id="contact">
			<?php if ( isset( $_SESSION['contact_form_feedback'] ) ) : ?>
                <p class="form__error"><?= __( 'Oups ! Il y a des erreurs dans le formulaire', 'Aline-db-antilope' ); ?></p>
			<?php endif; ?>
            <div class="form__field">
                <label for="select" class="select__label"><?= __( 'Qui souhaitez-vous joindre', 'Aline-db-antilope' ); ?>
                    ?</label>
                <select name="select" id="select" class="form__select">
                    <option>ISSEP</option>
                    <option>HEPL</option>
                    <option>Service électronique</option>
                </select>
            </div>
            <div class="form__field">
                <label for="firstname" class="form__label"><?= __( 'Votre prénom', 'Aline-db-antilope' ); ?> :</label>
                <input type="text" name="firstname" id="firstname" class="form__input"
                       placeholder="<?= __( 'Votre prénom', 'Aline-db-antilope' ); ?>">
            </div>
            <div class="form__field">
                <label for="name" class="form__label"><?= __( 'Votre Nom', 'Aline-db-antilope' ); ?> :</label>
                <input type="text" name="name" id="name" class="form__input"
                       placeholder="<?= __( 'Votre nom', 'Aline-db-antilope' ); ?>">
            </div>
            <div class="form__field">
                <label for="phone" class="form__label"><?= __( 'Votre téléphone', 'Aline-db-antilope' ); ?> :</label>
                <input type="tel" name="phone" id="phone" class="form__input"
                       placeholder="<?= __( 'Votre téléphone', 'Aline-db-antilope' ); ?>">
            </div>
            <div class="form__field">
                <label for="mail" class="form__label"><?= __( 'Votre email', 'Aline-db-antilope' ); ?> :</label>
                <input type="email" name="mail" id="mail" class="form__input"
                       placeholder="<?= __( 'Votre mail', 'Aline-db-antilope' ); ?>">
            </div>
            <div class="form__field">
                <label for="message" class="form__label"><?= __( 'Votre message', 'Aline-db-antilope' ); ?> :</label>
                <textarea type="message" name="message" cols="50" rows="10" id="message" class="form__input"
                          placeholder="<?= __( 'Votre message', 'Aline-db-antilope' ); ?>"></textarea>
            </div>
            <div class="form__field">
                <label for="rules" class="form__checkbox">
                    <input type="checkbox" name="rules" id="rules" value="1">
                    <span><?= str_replace( ':conditions', '<a class="form__link" title="Voir la page des mentions légales" href="https://breathe-antilope.aline-db.be/politique-de-confidentialite/">' . __( 'conditions générales d\'utilisation', 'Aline-db-antilope' ) . '</a>', __( 'J\'accepte les :conditions', 'Aline-db-antilope' ) ); ?>
                        .</span>
                </label>
            </div>
            <div class="form__action">
				<?php wp_nonce_field( 'nonce_submit_contact' ) ?>
                <input type="hidden" name="action" value="submit_contact_form"/>
                <button class="form__button" type="submit"><?= __( 'Envoyer', 'Aline-db-antilope' ); ?></button>
            </div>
        </form>
	<?php else : ?>
        <p class="form__confirm" id="contact"><?= __( 'Merci ! Votre message a bien été envoyé.', 'Aline-db-antilope' ); ?>.</p>
		<?php endif; ?>
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

<?php get_footer(); unset( $_SESSION['contact_form_feedback']); ?>
