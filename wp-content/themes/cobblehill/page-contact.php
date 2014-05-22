<?php get_header(); ?>
<div id="map" class="cont"></div>

<div class="page-header cont">
	<div class="mid-cont">
		<h5><?php the_title(); ?></h5>
		<h1><span><?php the_field('page_headline'); ?></span></h1>
	</div>
</div>
<div class="black-bg cont">
	<div class="mid-cont">
		<div class="left">
			<h5>get in touch</h5>
			<div class="contact-cont">
				<div class="address cont">
					<?php the_field('address', 'user_1'); ?>
				</div>
				<a class="button black btn-desktop" target="_blank" href="<?php the_field('address_map', 'user_1'); ?>">driving directions</a>
			</div>
		</div>
		<div class="right">
			<div class="contact cont">
				<a href="mailto:<?php the_field('contact_email', 'user_1'); ?>" target="_blank"><?php the_field('contact_email', 'user_1'); ?></a><br/>
				<?php the_field('phone', 'user_1'); ?>
			</div>
			<a class="button black btn-mobile" target="_blank" href="<?php the_field('address_map', 'user_1'); ?>">driving directions</a>
			<div class="social-cont cont">
				<a class="twitter social-icon" target="_blank" href="<?php the_field('twitter_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" /></a>
				<a class="instagram social-icon" target="_blank" href="<?php the_field('instagram_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png" /></a>
				<a class="vimeo social-icon" target="_blank" href="<?php the_field('vimeo_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/vimeo-icon.png" /></a>
				<a class="dribble social-icon" target="_blank" href="<?php the_field('dribble_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/dribble-icon.png" /></a>
				<a class="facebook social-icon" target="_blank" href="<?php the_field('facebook_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" /></a>
				<a class="pinterest social-icon" target="_blank" href="<?php the_field('pinterest_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/pinterest-icon.png" /></a>
			</div>
		</div>

	</div>
</div>
<div id="contact-form" class="cont blue">
	<div class="mid-cont">
		<h5 class="form-title">contact us today</h5>
		<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
		<input id="checkbox1" class="css-checkbox" type="checkbox" checked="checked">
		<label class="css-label lite-green-check" name="checkbox1_lbl" for="checkbox1">Green Check</label>
	</div>
</div>

<script type="text/javascript">
     // When the window has finished loading create our google map below
     google.maps.event.addDomListener(window, 'load', init);
 
     function init() {
		var myLatlng = new google.maps.LatLng(32.787508,-79.929562);
		
         var mapOptions = {
             zoom: 16,
			 scaleControl: false,
			 scrollwheel: false,
			 zoomControl: false,
			 panControl:false,
			 streetViewControl: false,
			 mapTypeControl:false,
             center: myLatlng,
             styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
         };

         var mapElement = document.getElementById('map');
         var map = new google.maps.Map(mapElement, mapOptions);
		var image = new google.maps.MarkerImage('/wp-content/themes/cobblehill/images/map-pin.png');
		var marker = new google.maps.Marker({
		      position: map.getCenter(),
		      map: map,
		      title: 'Hello World!',
			  icon: image
		  });
		var center;
		function calculateCenter() {
		  center = map.getCenter();
		}
		google.maps.event.addDomListener(map, 'idle', function() {
		  calculateCenter();
		});
		google.maps.event.addDomListener(window, 'resize', function() {
		  map.setCenter(center);
		});
     }


 </script>
<?php get_footer(); ?>