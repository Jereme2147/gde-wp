<?php 
    get_header();
 ?>-
<div class="page-box">
<?php 
     while(have_posts()) {
        the_post();
        echo the_content();
     }
?>
</div>
<?php
get_footer() ?>