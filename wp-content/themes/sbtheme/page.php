
<?php get_header(); ?>

<div class="page-content ">
    <div class="container">
        <article class="col-sm-12 col-md-10 col-md-offset-1">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="page-title">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </div>
                <div class="page-body">
                    <?php the_content(); ?> 
                </div>
            <?php endwhile; ?>
        </article>
    </div>
</div>

<?php get_footer(); ?>