<?php 
    $background_image = $args["background_image"];
    $logo = $args["Logo"];
?>
<section 
    class="hero_block"
    <?php if ($background_image): ?>
        style="background-image: url('<?php echo $background_image ?>')"
    <?php endif; ?>
>

    <div class="hero_block__filter"></div>

    <?php if ($logo): ?>
        <div class="hero_block__logo">
            <img
                src="<?php echo $logo ?>"
                alt="website logo"
            />
        </div>
    <?php endif; ?>
    <?php get_template_part("/template-parts/components/main-page", "scrollBtn") ?>
</section>