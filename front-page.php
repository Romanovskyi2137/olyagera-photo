<?php get_header(); 
    // Template Name: Front Page
?>
<?php $fields = get_fields(); ?>
<div class="wrapper">
    <main>
        <!-- <?php get_template_part( "template-parts/components/main-page", "hero", [
            "background_image" => $fields["background_image"],
            "Logo" => $fields["Logo"]
            ] ); ?> -->
        <?php get_template_part( "template-parts/components/main-page", "about", [
            "photographer_image" => $fields["photographer_image"],
            "about_text" => $fields["about_text"],
            "about_button_text" => $fields["about_button_text"]
            ] ); ?>
        <?php if (get_field("carousel")) : ?>
            <section class="carousel_section __container">
                <?php echo do_shortcode(get_field("carousel")) ?>
            </section>
        <?php endif ?>
    </main>
</div>
<?php get_footer(); ?>
</html>