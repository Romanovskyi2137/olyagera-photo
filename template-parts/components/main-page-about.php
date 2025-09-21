<?php 
    $photographer_image = $args["photographer_image"];
    $about_text = $args["about_text"];
    $about_button_text = $args["about_button_text"];
?>
<section
    id="about_me_block"
    class="__container"
>
        <div class="about__media_block">
            <?php if ($photographer_image) : ?>
                <img
                    src="<?php echo $photographer_image; ?>"
                    alt="Photographer"
                />
            <?php endif; ?>
        </div>
        <section class="about__text_block">
            <p>
                <?php if ($about_text) echo $about_text; ?>
            </p>
            <a
                href="#"
            >
                <?php if ($about_button_text) echo $about_button_text; ?>
            </a>
        </section>
</section>