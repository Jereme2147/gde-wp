<?php get_header() ?>;
<div class="banner-div">
    <?php 
        require_once(plugin_dir_path(__FILE__) . '/assets/contact-banner.php');
    ?>
</div>
<?php 
    require_once(plugin_dir_path(__FILE__) . '/assets/contact-banner-text.php');
?>
<div class="page-box-contact">

<?php 
     while(have_posts()) {
        the_post();
        echo the_content();
     }
?>
</div>
<?php get_footer() ?>;