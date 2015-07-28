<?php
/**
 * Template Name: Single Blog View
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */ ?>
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


<div class="container">
		<div class="row">
		  <div class="col-md-8">
			
			<!-- div id="content" class="clearfix row"> -->
			
				<!--<div id="main" class="col-sm-8 clearfix" role="main">-->

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<div class="pull-left" style="margin-right: 20px;"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
							<div class="clearfix"></div>
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<p>Back to the <a href="/blog/">blog</a></p>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				<!--</div>--> <!-- end #main -->
 
    
			</div> <!-- end #content -->
		<!-- Sidebar col md 4 -->
		<!--</div> --> <!-- content -->
	</div>
</div>

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