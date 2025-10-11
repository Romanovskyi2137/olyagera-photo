<?php 
    $settings_page_ID = get_page_by_path('site-settings')->ID;
    $instagram_URL = get_post_meta($settings_page_ID, "instagram",true);
    $instagram_icon_ID = get_post_meta($settings_page_ID, "instagram_icon", true);
    $instagram_icon = wp_get_attachment_url($instagram_icon_ID);
?>
<header>
    <a
        <?php if ($instagram_URL) : ?>
            href="<?php echo $instagram_URL ?>"
        <?php endif ?>
        target="blank"
        class="social_icon"
    >
        <img 
        <?php if ($instagram_icon) : ?>
            src="<?php echo $instagram_icon ?>"
        <?php endif ?>
            alt="instagram icon"
        />
    </a>
    <div class="burger_btn menu_icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger-menu.svg" alt="mobile menu icon"/>
    </div>
    <div class="close_btn menu_icon mobile_menu_btn_hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/close-x.svg" alt="close mobile menu icon"/>
    </div>
    <?php
        wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container' => 'nav' 
            ) 
        );
    ?>
</header>