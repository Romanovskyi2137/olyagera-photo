<?php get_header(); 
    // Template Name: Portfolio Page
?>
<div class="wrapper">
    <main>
       <section class="portfolio-albums __container">
        <?php
        $args = [
            'post_type' => 'album',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC',
        ];

        $albums = new WP_Query($args);

        if ($albums->have_posts()) :
            while ($albums->have_posts()) : $albums->the_post(); ?>
                
                <div class="album-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                            $images = acf_photo_gallery("album", get_the_ID());
                            $image = reset($images)['full_image_url'];
                        ?>
                        <img src=<?php echo $image ?> alt="" />
                        <h2><?php the_title(); ?></h2>
                    </a>
                </div>

            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p class="portfolio_noalbums_msg">Альбомів поки немає.</p>';
        endif;
        ?>
    </section>
    </main>
</div>
<button class="scroll-to-top" id="scrollToTop">↑</button>
<?php get_footer(); ?>