<?php get_header() ?>
<div class="banner-div">
    <?php 
        require_once(plugin_dir_path(__FILE__) . '/assets/landing-banner.php');
    ?>
</div> 
<?php 
    require_once(plugin_dir_path(__FILE__) . '/assets/landing-banner-text.php');
?>
<div class="content-section">
    <div class="page-box">
        <section class="blog-section">
            <?php 
                require_once(plugin_dir_path(__FILE__) . '/assets/blog-section.php');
            ?>
        </section>
        <section class="landing-services">
            <?php 
                require_once(plugin_dir_path(__FILE__) . '/assets/landing-services.php');
            ?>
            <!-- dynamically loaded services go here -->
            <!-- maybe 3? -->
        </section>
        
    </div>
<!-- </div> -->
    

<?php get_footer() ?>