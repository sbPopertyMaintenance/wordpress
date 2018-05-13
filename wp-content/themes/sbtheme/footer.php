        
        <footer>

            <div class="container footer-content">

                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <div class="nav-logo pull-left">
                        <?php if ( get_theme_mod( 'identity_footer_logo' ) ): ?>
                            <img class="logo" src="<?php echo get_theme_mod( 'identity_footer_logo' ); ?>" alt="S&B Property Maintenance">
                        <?php else: ?>
                            <img class="logo" src="<?php echo get_bloginfo( 'template_directory' );?>/images/Logo-DarkBlueBack.png" alt="S&B Property Maintenance">
                        <?php endif; ?>
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
                </div>

            </div>

            <div class="copyright text-center">
                <div class="container">
                    <small>© <?php echo date("Y"); ?> S&B Property Maintenance. All rights reserved.</small>
                </div>
            </div>

        </footer>
        </div>
        <?php wp_footer(); ?> 
        <script type="text/javascript" src="<?php echo get_bloginfo( 'template_directory' );?>/slick/slick.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>