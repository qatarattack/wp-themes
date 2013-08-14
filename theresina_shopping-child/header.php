<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="erickpatrick.com">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>		
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    
	 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	 <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/lib/jquery-1.4.2.min.js"></script>
    <?php wp_head(); ?>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/vendor/respond.min.js"></script>
	
    <?php if (is_page('cinemas') || is_home()) : ?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/image_flow/imageflow.css">
      <script src="<?php echo get_stylesheet_directory_uri() ?>/js/vendor/image_flow/imageflow.js"></script>
	<?php endif; ?>	

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23021370-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.colorbox.js"></script>	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/colorbox.css" />	<script>			$(document).ready(function(){				//Examples of how to assign the Colorbox event to elements				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});				//Example of preserving a JavaScript event for inline calls.				$("#click").click(function(){ 					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");					return false;				});			});	</script>
  
	<!--
	  jQuery library
	-->
	
	<!--
	  jCarousel library
	-->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/carousel/lib/jquery.jcarousel.min.js"></script>
	<!--
	  jCarousel skin stylesheet
	-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/carousel/skins/tango/skin.css" />
	
	<script type="text/javascript">

	function mycarousel_initCallback(carousel)
	{
		// Disable autoscrolling if the user clicks the prev or next button.
		carousel.buttonNext.bind('click', function() {
			carousel.startAuto(0);
		});

		carousel.buttonPrev.bind('click', function() {
			carousel.startAuto(0);
		});

		// Pause autoscrolling if the user moves with the cursor over the clip.
		carousel.clip.hover(function() {
			carousel.stopAuto();
		}, function() {
			carousel.startAuto();
		});
	};

	jQuery(document).ready(function() {
		jQuery('#mycarousel').jcarousel({
			auto: 5,
			wrap: 'last',
			scroll: 1,
			initCallback: mycarousel_initCallback
		});
	});

	</script>
	  
  </head>
  <body>
    <div class="master-head">
      <div style="" class="container_16 top">
        <header>
          <div class="grid_2 alpha">
            <a href="<?php echo site_url('/') ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo1.png" alt="Logo Teresina Shopping"></a>
          </div><!-- :logo -->
          <div class="grid_14">
            <div class="countdown-widget" style="display: none;">
              <?php if ( dynamic_sidebar('index-widget-countdown') ) : ?>
              <? else : ?>
              <?php endif; ?>
            </div>
            <nav class="grid_13">
              <div class="hide-desktop">
                <a href="<?php echo home_url('/o-shopping/') ?>">O Shopping</a>
                <a href="<?php echo home_url('/Lojas/') ?>">Lojas</a>
                <a href="<?php echo home_url('/servicos/') ?>">Serviços</a>
                <a href="<?php echo home_url('/category/novidades/') ?>">Novidades</a>
                <a href="<?php echo home_url('/ampliacao-the/') ?>">Ampliação</a>
                <a href="<?php echo home_url('/category/novidades/eventos/') ?>">Eventos</a>
                <a href="<?php echo home_url('/category/novidades/promocoes/') ?>">Promoções</a>
				<a style="display: none;" href="<?php echo home_url('/revista/') ?>">Revista</a>
                <a style="display: none;" href="<?php echo home_url('/category/blog/moda/') ?>">M&iacute;dia kit</a>
                <a href="<?php echo home_url('/contato/') ?>">Contato</a>
              </div>
              <form class="hide-mobile">
                <select name="" class="javascript-navigation">
                  <option>Menu</option>
                  <option value="<?php echo home_url('/o-shopping/') ?>">O Shopping</option>
                  <option value="<?php echo home_url('/Lojas/') ?>">Lojas</option>
                  <option value="<?php echo home_url('/servicos/') ?>">Serviços</option>
                  <option value="<?php echo home_url('/category/novidades/') ?>">Novidades</option>
                  <option value="<?php echo home_url('/ampliacao-the/') ?>">Ampliação</option>
                  <option value="<?php echo home_url('/category/novidades/eventos/') ?>">Eventos</option>
                  <option value="<?php echo home_url('/category/novidades/promocoes/') ?>">Promoções</option>				  				  
				  <option style="display: none;" value="<?php echo home_url('/revista/') ?>">Revista</option>
                  <option style="display: none;" value="<?php echo home_url('/category/blog/moda/') ?>">Blog de Moda</option>
                  <option value="<?php echo home_url('/contato/') ?>">Contato</option>
                </select>
              </form>
            </nav><!-- :navigation -->
            <div id="hover-icons" class="grid_3 omega">
              <a class="icon facebook" href="https://www.facebook.com/TeresinaShopping" title="Redes Sociais: Facebook"></a>
              <a class="icon twitter" href="https://twitter.com/TeresinaShopp" title="Redes Sociais: Twitter"></a>
              <a class="icon instagram" href="http://instagram.com/teresinashopping" title="Redes Sociais: Instagram"></a>
              <a class="icon google" href="https://foursquare.com/teresinashopp" title="Redes Sociais: Foursquare"></a>
              <a class="icon pinterest" href="http://pinterest.com/teresinashopp/" title="Redes Sociais: Youtube"></a>
              <a class="icon youtube" href="http://youtube.com/teresinashopp" title="Redes Sociais: Youtube"></a>
            </div><!-- :social-sharing -->
          </div>
        </header>
      </div><!-- :header -->
      <div class="clear"></div>
    </div>