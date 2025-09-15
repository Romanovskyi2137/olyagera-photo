<section
    id="about_me_block"
    class="__container"
>
        <div class="about__media_block">
            <div class="media_block__decor_outter">
                <div class="media_block__decor_inner"></div>
            </div>
            <?php if (get_field("photographer_image")) : ?>
                <img
                    src="<?php the_field("photographer_image"); ?>"
                    alt="Photographer"
                />
            <?php endif; ?>
        </div>
        <section class="about__text_block">
            <p>
                <?php if (get_field("about_text")) the_field("about_text"); ?>
            </p>
            <a
                href="#"
            >
                <?php if (get_field("about_button_text")) the_field("about_button_text"); ?>
            </a>
        </section>
</section>