<?php
 $the_query = new WP_Query( array(
                                // 'posts_per_page'=>10,
                                'post_type'=>'landing',
                                'sort_column' => 'post_date', 
                                'sort_order' => 'asc'
                                // 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
 )); 
 $landingPostCount = 2;
 while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="landing-service-card">
                <div class="landing-service-container">
                    <div class="landing-service-title">
                        <h2><?php echo the_title() ?></h2>
                        <h3><?php echo the_excerpt() ?></h3>
                        <p>
                            <?php echo the_content() ?>
                        </p>
                    </div>
                    <div class="landing-service-image">
                        <img src="<?php echo the_post_thumbnail_url();?>" alt="service image">
                    </div>
                </div>
            </div>
                <!-- *****************^^^ new -->

<?php
$landingPostCount = $landingPostCount + 1;
endwhile;
?>