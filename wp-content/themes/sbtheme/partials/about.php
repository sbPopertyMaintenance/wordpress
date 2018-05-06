<section id="about">
    <div class="container">
        <?php // The Query ?>
        <?php $the_query = new WP_Query( array( 'post_type' => 'post', 'cat' => 'home-page', 's' => 'Why Choose Us?' ) ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="row">
                    <div class="text-center">
                        <h2><?php echo $post->post_title; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <?php $image = get_field('post-image'); ?>
                    
                    <div class="col-xs-12 col-sm-8">
                        <?php echo $post->teaser_text ?>
                        <div class="row">
                            <a href="/about" class="btn btn-outline-dark">Learn More</a>
                        </div>
                    </div>
                    <div class="col-sm-4 about-image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
            
        <?php endif; ?>
    </div>
</section>