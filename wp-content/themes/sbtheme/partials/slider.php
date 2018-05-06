<section id="gallery">
    <div class="container">
        <div class="row">
                <div class="text-center">
                    <h2>Our Work</h2>
                </div>
        </div>
        <div class="row">
            <div class="col-xs-12 slider-items">
                <div class="slider">
                    <?php // The Query ?>
                    <?php $the_query = new WP_Query( array('post_type' => 'home_slider_image') ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                            <?php $image = get_field('slider-image'); ?>
                            
                            <div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                        
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <a href="/gallery" class="btn btn-outline-dark">See More</a>
        </div>
    </div>

</section>