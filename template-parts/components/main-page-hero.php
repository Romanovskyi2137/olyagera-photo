<section 
        class="hero_block"
        style= "background-image: url(<?php echo get_template_directory_uri() . '/assets/img/white_flowers.jpg' ?>)"
    >
        <div class="hero_block__filter"></div>
        <div class="hero_block__logo">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                alt="website logo"
            />
        </div>
        <?php get_template_part("/template-parts/components/main-page", "scrollBtn") ?>
</section>