<div class="landing-blog-container">
    <div class="landing-blog-header">
        <h1>GDE News</h1>
    </div>
<?php 
    $postCounter = 0;
    while (have_posts()) {
        the_post();
    if ($postCounter == 0 ){
    ?>
    <div class="landing-blog-meta">
        <h2><?php echo the_title();?></h2>
        <!-- <h3><?php// echo get_the_author();?></h3> -->
        <h4><?php echo get_the_date();?></h4>
    </div>
    <div class="landing-blog-content">
        <p>
            <?php
                echo the_content();
            ?>
        </p>
    </div>
    <div class="landing-blog-links">
        <a href="<?php echo site_url('/blog') ?>">
            <div>
                <h3>More News</h3>
            </div>
        </a>
    </div>

    <?php
    $postCounter = $postCounter + 1;
    } else {
        break;
            ?>
            
            <!-- <a href="<?php //echo the_permalink() ?>">
               <div class="previous-blogs">
                   <h4><?php //echo the_title() ?></h4>
               </div>
            </a> -->
            
            <?php
            $postCounter = $postCounter + 1;
    }
    
}
    ?>   
    </div>     
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>
</div>
        