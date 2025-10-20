<?php 
    $settings_page_ID = get_page_by_path('site-settings')->ID;
    $instagram_URL = get_post_meta($settings_page_ID, "instagram", true);
    $phone_number = get_post_meta($settings_page_ID, "phone_number", true);
    $phone_href = preg_replace('/[^\d+]/', '', $phone_number);
?>

<p>
    <a href="<?php echo esc_url($instagram_URL); ?>" target="_blank" rel="noopener" class="footer_instagram">Instagram</a>
    <span> | </span>
    <a href="tel:<?php echo $phone_href; ?>" rel="tel" class="footer_tel"><?php echo esc_html($phone_number); ?></a>
</p>
<p>
    © <?php echo date("Y"); ?> OlyaGera Photography | All rights reserved.
</p>