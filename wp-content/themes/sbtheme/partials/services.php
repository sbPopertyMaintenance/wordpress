<?php

    // is this the services page?
    $slug = get_post_field( 'post_name', get_post() );
    if ( $slug === 'services'):
        $home = false;
    else:
        $home = true;
    endif;
?>



<section id="services">
    <div class="<?php if ($home): ?>container<?php endif; ?>">
        <?php if ($home): ?>
            <div class="row">
                <?php // The Query ?>
                <?php $the_query = new WP_Query( array( 'post_type' => 'post', 'cat' => 'home-page', 's' => 'Services' ) ); ?>

                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php if ($home): ?>
                            <div class="text-center">
                                <h2>Services</h2>
                                <div class="col-md-8 col-lg-6 col-centered">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                    <!-- end of the loop -->
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
        <div class="row service-items">
            <div class="col-md-12 col-lg-10 col-lg-offset-1">

            
            <?php // The Query ?>
            <?php $the_query = new WP_Query( array('post_type' => 'service') ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php $image = get_field('service-image'); ?>
                    
                    <div class="col-xs-4">
                        <div class="service-item">
                            <img src="<?php echo $image['url']; ?>" alt="">
                            <div class="slide-title">
                                <h3><?php echo $post->post_title; ?></h3> 
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
                
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </div>
        </div>

        <?php if ($home): ?>
            <div class="row text-center">
                <a href="/services" class="btn btn-outline-dark view-all-services">View All Services</a>
            </div>
        <?php endif; ?>

    </div>
</section>