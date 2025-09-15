<section 
    class="hero_block"
    <?php $bg = get_field("background_image") ?>
    <?php if ($bg): ?>
        style="background-image: url('<?php echo $bg ?>')"
    <?php endif; ?>
>

    <div class="hero_block__filter"></div>

    <?php $logo = get_field("Logo") ?>
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