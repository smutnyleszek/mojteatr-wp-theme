<?php get_header(); ?>

    <?php include(TEMPLATEPATH . '/menu.php' ); ?>

    <div id="center">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

            <div class="entry">
                <?php the_content(); ?>
            </div>

            <div class="postmetadata"><?php the_tags("Tagi: "," &middot; "," &nbsp; "); ?> <!-- Dodane <?php echo str_replace(array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"), array("stycznia", "lutego", "marca", "kwietnia", "maja", "czerwca", "lipca", "sierpnia", "września", "października", "listopada", "grudnia"), get_the_date()); ?> o <?php the_time() ?> --> </div>

        </article>

    <?php comments_template(); ?>

    <?php endwhile; endif; ?>

    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
