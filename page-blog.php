 <?php get_header(); 

?>
<div class="banner-div">
    <?php 
        require_once(plugin_dir_path(__FILE__) . '/assets/blog-banner.php');
    ?>
</div>
<?php 
    require_once(plugin_dir_path(__FILE__) . '/assets/blog-banner-text.php');
?>
<section class="summary-section section-divider">
<?php
 $the_query = new WP_Query( array('posts_per_page'=>5,
                                 'post_type'=>'post',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            ); 
                            $blogNum = 0;
                            ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
 <div class="page-box">
                    <div class="blog-page-meta">
                        <h3><?php echo get_the_date();?></h3>
                        <h3><?php the_title(); echo "  " . $blogNum ?></h3>
                        <h3>Posted by <?php echo get_the_author();?></h3>
                    </div>
                    <div class="summary-content" id="summary-expand-<?php echo $blogNum ?>">
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    </div>
                    <div class="blog-expanded" id="expand-<?php echo $blogNum ?>">
                        <?php 
                            echo the_content();
                        ?>
                    </div>
                    <div class="summary-links no-link" onclick="expandBlog(<?php echo $blogNum ?>)">
                        <!-- <h3>Previous Workouts</h3> -->
                        <h3>View</h3>
                    </div>
                    <?php $blogNum = $blogNum + 1; ?>
                </div>
<?php
endwhile;
?>
    </section>
    <div class="pagination">
<?php
$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );

wp_reset_postdata();
?>
    </div>
<?php get_footer();?>