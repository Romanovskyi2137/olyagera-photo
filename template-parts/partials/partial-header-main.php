<header>
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