<?php get_header() ?>;
<div class="banner-div">
    <?php 
        require_once(plugin_dir_path(__FILE__) . '/assets/contact-banner.php');
    ?>
</div>
<?php 
    require_once(plugin_dir_path(__FILE__) . '/assets/contact-banner-text.php');
?>
<div class="content-section">
<div class="page-box-contact">

<?php 
     while(have_posts()) {
        the_post();
        echo the_content();
     }
?>
<!-- insert me anywhere. style found in with page-box -->
<div class="social-icons">
     <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/social/bf.png"alt="link to facebook"></a>
     <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/social/insta.png" alt="link to instagram"></a>
     <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/social/twitter.png" alt="link to twitter"></a>
</div>
</div>
<?php get_footer() ?>;