<?php get_header() ?>
<div class="banner-div">
    <?php 
        require_once(plugin_dir_path(__FILE__) . '/assets/generators-banner.php');
    ?>
</div>
<?php 
    require_once(plugin_dir_path(__FILE__) . '/assets/generators-banner-text.php');
?>
<div class="page-box">

<?php 
     while(have_posts()) {
        the_post();
        echo the_content();
     }
?>
</div>
<!-- <h1>services</h1> -->
<?php get_footer() ?>