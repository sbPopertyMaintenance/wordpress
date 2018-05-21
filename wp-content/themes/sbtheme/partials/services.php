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
                                    <p><?php echo $post->teaser_text; ?></p>
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
            
            <?php // The Query ?>
            <?php $the_query = new WP_Query( array('post_type' => 'service') ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <?php $image = get_field('service-image'); ?>
                    
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-item">
                            <div class="service-image-container"
                                style="background-image: url(<?php echo $image['url']; ?>)">
                                <div class="service-item-fade"></div>
                            </div>
                            <div class="service-item-body">
                                <div class="slide-title">
                                    <h3><?php echo $post->post_title; ?></h3> 
                                </div>
                                <?php echo the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
                
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <?php if ($home): ?>
            <div class="row text-center">
                <a href="/services" class="btn btn-outline view-all-services">Learn More</a>
            </div>
        <?php endif; ?>

    </div>
</section>