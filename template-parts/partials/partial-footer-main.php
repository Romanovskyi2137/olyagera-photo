<?php 
    $settings_page_ID = get_page_by_path('site-settings')->ID;
    $instagram_url = get_post_meta($settings_page_ID, "instagram",true);
    $contact_number_data = get_post_meta($settings_page_ID, "contact_number",true);
    $contact_number = preg_replace('/[^0-9+]/', '', $contact_number_data);
?>
<p>
    <a 
        href="<?php echo ($instagram_url) ? $instagram_url : ""  ?>" 
        target="blank" 
        rel="instagram" 
        class="footer_instagram"
    >
        Instagram
    </a>
    <span> | </span>
    <a 
        href="tel:<?php echo ($contact_number_data) ? $contact_number : "+380984826073" ?>" 
        rel="tel" class="footer_tel"
        >
            <?php echo ($contact_number_data) ? $contact_number_data : "+380 98 482 60 73" ?>
    </a>
</p>
<p>
    © <?php echo date("Y"); ?> OlgaGera Photography | All rights reserved.
</p>