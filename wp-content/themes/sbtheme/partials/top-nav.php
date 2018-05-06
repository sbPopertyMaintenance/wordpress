<nav class="top-nav">
    <div class="container">
        <div class="nav-logo pull-left">
            <img class="logo" src="<?php echo get_bloginfo( 'template_directory' );?>/images/logo-primary.jpg" alt="S&B Property Maintenance">
        </div>

        <div class="nav-content pull-right">
            <div class="info">
                <ul class="pull-right">
                    <li>
                        <div class="contact-item">
                            <span class="fas fa-phone"></span><small>phone</small>
                            <p>902-225-5647</p>
                        </div>
                    </li>
                    <li>
                        <div class="contact-item">
                            <span class="fas fa-envelope"></span><small>email</small>
                            <p>info@sbpropertymaintenance.ca</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="links">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
        </div>

        <div class="nav-burger-menu">
            
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>

            
        </div>
    </div>
</nav>