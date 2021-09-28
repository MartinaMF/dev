<?php
while(have_posts()){
    the_post(); ?>
    <h1><?php echo the_title();?></h1>
    <p><?php echo the_content();?></p>
<?php
}?>