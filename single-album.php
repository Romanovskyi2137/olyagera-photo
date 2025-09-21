<?php get_header(); ?>
<div class="wrapper">
    <main>
        <?php
            $images = acf_photo_gallery('album', get_the_ID());

            if( $images ) : ?>
                <div class="acf-photo-gallery">
                    <?php foreach( $images as $image ): ?>
                                <img src="<?php echo $image['thumbnail_image_url']; ?>" 
                                    alt="alt" />
                    <?php endforeach; ?>
                </div>
        <?php endif; ?>
    </main>
</div>
<?php get_footer(); ?>
</html>