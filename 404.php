<?php get_header(); ?>

<nav class="navbar navbar-default navbar-static-top">
      <div class="container" style="margin-bottom: 20px;">
        <div class="navbar-header">
        <!--<img src="//<?php echo THEME_IMG_PATH; ?>/logo.png" alt="" class="hidden">-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="position: relative;top: 22px;">
          <ul class="nav navbar-nav">
            <!--<li><a href="#what-we-do">What we do</a></li>-->
            <!--<li><a href="#our-clients">Our Clients</a></li>-->
            <li><a class="navbar-brand" href="/"><img src="<?php echo THEME_IMG_PATH; ?>/logo.svg" alt="Sugar The Agency logo" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/logo.png'" class="logo"></a></li>
            <!--<li><a href="#blog">Blog</a></li>-->
            <!--<li><a href="#contact">Contact Us</a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- start content container -->
    <div class="row dmbs-content">

        <!--<?php //left sidebar ?>-->
        <!--<?php get_sidebar( 'left' ); ?>-->

        <div class="col-md-12 dmbs-main">
         <h1 style="text-align:center;"><?php _e('Sorry This Page Does Not Exist!','devdmbootstrap3'); ?></h1>
        </div>

        <!--<?php //get the right sidebar ?>-->
        <!--<?php get_sidebar( 'right' ); ?>-->

    </div>
    <!-- end content container -->

<!-- Hard-coded footer -->
<div class="footer">
    <ul class="nav" style="margin-bottom: 20px;">
      <li><a href="/">Home</a></li>
      <!--<li><a href="#our-clients">Our clients</a></li>-->
      <!--<li><a href="#blog">Blog</a></li>-->
      <!--<li><a href="#contact-us">Contact Us</a></li>-->
    </ul>
    <a href="#top">
      <img src="<?php echo THEME_IMG_PATH; ?>/back-to-top.svg" alt="back to top icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/back-to-top.png'" style="padding-bottom: 10px;"></a>
    <br>
    <a href="#top" style="font-size: 12px;text-transform:uppercase;color:#fff;font-family:'oswaldlight'">Back to top</a>
    <p style="margin-top: 20px;font-family: 'robotolight';">(+27) 31 940 4383<br>
    <a href="mailto:admin@sugartheagency.co.za" style="text-transform:lowercase;font-size:10px;">admin@sugartheagency.co.za</a></p>
  <p style="font-family: 'robotolight';">2015 All rights reserved SUGAR the agency.</p>
</div>