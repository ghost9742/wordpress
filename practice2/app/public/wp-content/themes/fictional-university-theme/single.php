<?php
get_header();
while (have_posts()) {
    the_post(); // this function will get the next post and set it up so that we can use template tags like the_title() and the_content() to display the post data
?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php
}
get_footer();

?>