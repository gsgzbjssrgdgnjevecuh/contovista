<?php
/**
 * Block Name: Opened positions
 */
$sectionId = ( get_field('section_id') ) ? 'id="'. get_field('section_id') .'"' : '';

?> 



<section class="section positions logo-color logo-color-dark" <?php echo $sectionId; ?> >
  <div class="container">
    <h2 class="white"><?php echo the_field('title'); ?></h2>

      <script type="text/javascript" id="rbox-loader-script">
      if(!window._rbox){
      window._rbox = { host_protocol:document.location.protocol, ready:function(cb){this.onready=cb;} };
      (function(d, e) {
          var s, t, i, src=['/static/client-src-served/widget/31946/rbox_api.js', '/static/client-src-served/widget/31946/rbox_impl.js'];
          t = d.getElementsByTagName(e); t=t[t.length - 1];
          for(i=0; i<src.length; i++) {
              s = d.createElement(e); s.src = _rbox.host_protocol + '//w.recruiterbox.com' + eval("src" + String.fromCharCode(91) + String(i) + String.fromCharCode(93));
              t.parentNode.insertBefore(s, t.nextSibling);
          }})(document, 'script');
      }
			jQuery(document).on('submit', ".positions form", function() {
				dataLayer.push({
					'event': 'csEventFormSumbit',
					'formName': 'Application'
				});
				console.log('dataLayer', dataLayer);
			});
      </script>

      <div class="positions__bottom">
        <h4 class="white fw700"><?php echo the_field('bottom_title'); ?></h4>
        <?php echo the_field('bottom_text'); ?>
      </div>

  </div>
</section>