
<?php get_header(); ?>
<div class="home-page">
<h1>Anton Saputro</h1>
<h2>Web Developer</h2>
<span class="icon-pointer"></span> Jakarta, Indonesia

<div class="container">
	<div id="slides">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/bbm-sticker.jpg" alt="">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/mataharimall.jpg" alt="">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/myjob.jpg" alt="">
	</div>
</div>

<a href="mailto:antonpsaputro@gmail.com" class="button contact-btn"><span class="icon-envelope"></span> Contact</a>

</div>


<script>
    $(function() {
      $('#slides').slidesjs({
        width: 900,
        height: 550,
        navigation: {
          active: false,
          effect: "fade"
        },
        pagination: {
          active: false,
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 1000
          }
        },
        play: {
	      active: false,
	      effect: "fade",
	      interval: 5000,
	      auto: true,
	      swap: true,
	      pauseOnHover: true,
	      restartDelay: 0
    	}
      });
    });
</script>
<?php// get_footer(); ?>