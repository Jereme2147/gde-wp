
<?php get_header() ?>
<div class="content-section-company">
<div class="page-box-company">

<?php 
     while(have_posts()) {
        the_post();
        echo the_content();
     }
?>
</div>
   <!-- </div> -->
<?php get_footer() ?> 