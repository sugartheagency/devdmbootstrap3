<!--MAIN NAV -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container" id="top" style="margin-bottom: 20px;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="position: relative;top: 22px;">
          <ul class="nav navbar-nav">
            <li><a href="#what-we-do">What we do</a></li>
            <li><a href="#our-clients">Our Clients</a></li>
            <!--<li><a class="navbar-brand" href="/"><img src="//<?php echo THEME_IMG_PATH; ?>/logo.png" alt=""></a></li>-->
            <li><a class="navbar-brand" href="/"><img src="<?php echo THEME_IMG_PATH; ?>/logo.svg" alt="Sugar The Agency logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/logo.png'" class="logo"></a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php if ( has_nav_menu( 'main_menu' ) ) : ?>

    <div class="row dmbs-top-menu">
        <nav class="navbar navbar-fixed-top">
        <div class="container" style="margin-bottom: 20px;">
        <div class="navbar-header">
          <img src="<?php echo THEME_IMG_PATH; ?>/logo.png" alt="">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

                <?php
                wp_nav_menu( array(
                        'theme_location'    => 'main_menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
    </div>

<?php endif; ?>